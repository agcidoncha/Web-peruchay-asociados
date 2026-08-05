<?php
declare(strict_types=1);

require_once __DIR__ . '/lib/phpmailer/Exception.php';
require_once __DIR__ . '/lib/phpmailer/PHPMailer.php';
require_once __DIR__ . '/lib/phpmailer/SMTP.php';
require_once __DIR__ . '/lib/email-templates.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception as PHPMailerException;

header('Content-Type: application/json; charset=utf-8');

/**
 * Envía el email interno (a smtp_to) y la confirmación al cliente.
 * Cualquier fallo se registra en el log del servidor sin interrumpir la respuesta al usuario.
 */
function enviarEmailsContacto(array $config, array $datos): void
{
	if (empty($config['smtp_host'] ?? null)) {
		error_log('contacto.php: envío de email omitido, faltan claves smtp_* en config.php');
		return;
	}

	try {
		$mail = new PHPMailer(true);
		$mail->isSMTP();
		$mail->Host = $config['smtp_host'];
		$mail->Port = (int) $config['smtp_port'];
		$mail->SMTPAuth = true;
		$mail->Username = $config['smtp_user'];
		$mail->Password = $config['smtp_pass'];
		$mail->SMTPSecure = ((int) $config['smtp_port']) === 465 ? 'ssl' : 'tls';
		$mail->CharSet = 'UTF-8';
		$mail->setFrom($config['smtp_user'], $config['smtp_from_name'] ?? 'Perucha & Asociados');

		// --- Email interno ---
		$mail->addAddress($config['smtp_to']);
		$mail->addReplyTo($datos['email'], $datos['nombre']);
		if (!empty($datos['archivo_ruta']) && is_file($datos['archivo_ruta'])) {
			$mail->addAttachment($datos['archivo_ruta'], $datos['archivo_nombre_original'] ?? 'adjunto');
		}
		$mail->isHTML(true);
		$mail->Subject = 'Nuevo mensaje de contacto — ' . $datos['nombre'];
		$mail->Body = emailPlantillaInterna($datos);
		$mail->send();
	} catch (PHPMailerException $e) {
		error_log('contacto.php: fallo al enviar email interno — ' . $e->getMessage());
	}

	try {
		$mailCliente = new PHPMailer(true);
		$mailCliente->isSMTP();
		$mailCliente->Host = $config['smtp_host'];
		$mailCliente->Port = (int) $config['smtp_port'];
		$mailCliente->SMTPAuth = true;
		$mailCliente->Username = $config['smtp_user'];
		$mailCliente->Password = $config['smtp_pass'];
		$mailCliente->SMTPSecure = ((int) $config['smtp_port']) === 465 ? 'ssl' : 'tls';
		$mailCliente->CharSet = 'UTF-8';
		$mailCliente->setFrom($config['smtp_user'], $config['smtp_from_name'] ?? 'Perucha & Asociados');

		// --- Confirmación al cliente ---
		$mailCliente->addAddress($datos['email'], $datos['nombre']);
		$mailCliente->isHTML(true);
		$mailCliente->Subject = 'Hemos recibido tu mensaje — Perucha y Asociados';
		$mailCliente->Body = emailPlantillaCliente($datos);
		$mailCliente->send();
	} catch (PHPMailerException $e) {
		error_log('contacto.php: fallo al enviar email de confirmación al cliente — ' . $e->getMessage());
	}
}

function responder(int $status, bool $success, string $message, array $extra = []): never
{
	http_response_code($status);
	echo json_encode(array_merge(['success' => $success, 'message' => $message], $extra), JSON_UNESCAPED_UNICODE);
	exit;
}

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
	responder(405, false, 'Método no permitido.');
}

// Honeypot: campo invisible para personas, si un bot lo rellena se descarta en silencio.
if (!empty($_POST['web'] ?? '')) {
	responder(200, true, 'Mensaje enviado.');
}

$configPath = __DIR__ . '/config.php';
if (!is_file($configPath)) {
	error_log('contacto.php: falta config.php en ' . __DIR__);
	responder(500, false, 'El formulario no está disponible en este momento. Inténtalo más tarde.');
}
$config = require $configPath;

function limpiarTexto(?string $valor, int $maxLength): string
{
	$valor = trim((string) ($valor ?? ''));
	$valor = strip_tags($valor);
	if (function_exists('mb_substr')) {
		$valor = mb_substr($valor, 0, $maxLength);
	} else {
		$valor = substr($valor, 0, $maxLength);
	}
	return $valor;
}

$nombre = limpiarTexto($_POST['nombre'] ?? null, 150);
$empresa = limpiarTexto($_POST['empresa'] ?? null, 150);
$email = trim((string) ($_POST['email'] ?? ''));
$telefono = limpiarTexto($_POST['telefono'] ?? null, 30);
$mensaje = limpiarTexto($_POST['mensaje'] ?? null, 5000);
$datosSimulacion = limpiarTexto($_POST['datos_simulacion'] ?? null, 3000);

$errores = [];

if ($nombre === '') {
	$errores['nombre'] = 'Indica tu nombre.';
}
if ($email === '' || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
	$errores['email'] = 'Indica un email válido.';
}
if ($mensaje === '') {
	$errores['mensaje'] = 'Cuéntanos brevemente tu situación.';
}
if ($telefono !== '' && !preg_match('/^[+0-9\s().-]{6,30}$/', $telefono)) {
	$errores['telefono'] = 'Revisa el formato del teléfono.';
}
if (empty($_POST['privacidad'] ?? '')) {
	$errores['privacidad'] = 'Debes aceptar la Política de privacidad para enviar el formulario.';
}

if ($errores !== []) {
	responder(422, false, 'Revisa los datos del formulario.', ['errors' => $errores]);
}

// --- Archivo adjunto (opcional) ---
$archivoNombreGuardado = null;

if (isset($_FILES['archivo']) && $_FILES['archivo']['error'] !== UPLOAD_ERR_NO_FILE) {
	$archivo = $_FILES['archivo'];

	if ($archivo['error'] !== UPLOAD_ERR_OK) {
		responder(422, false, 'No se ha podido subir el archivo adjunto. Inténtalo de nuevo o sin adjunto.');
	}

	$maxBytes = 8 * 1024 * 1024; // 8 MB
	if ($archivo['size'] > $maxBytes) {
		responder(422, false, 'El archivo adjunto supera el tamaño máximo permitido (8 MB).');
	}

	$extensionesPermitidas = ['pdf', 'doc', 'docx', 'xls', 'xlsx', 'jpg', 'jpeg', 'png', 'txt'];
	$extension = strtolower(pathinfo($archivo['name'], PATHINFO_EXTENSION));
	if (!in_array($extension, $extensionesPermitidas, true)) {
		responder(422, false, 'Tipo de archivo no permitido. Formatos aceptados: PDF, Word, Excel, imagen o texto.');
	}

	$finfo = finfo_open(FILEINFO_MIME_TYPE);
	$mimeReal = $finfo ? finfo_file($finfo, $archivo['tmp_name']) : null;
	if ($finfo) {
		finfo_close($finfo);
	}
	$mimesPermitidos = [
		'application/pdf',
		'application/msword',
		'application/vnd.openxmlformats-officedocument.wordprocessingml.document',
		'application/vnd.ms-excel',
		'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet',
		'image/jpeg',
		'image/png',
		'text/plain',
	];
	if ($mimeReal !== null && !in_array($mimeReal, $mimesPermitidos, true)) {
		responder(422, false, 'El contenido del archivo no coincide con un formato permitido.');
	}

	$uploadsDir = __DIR__ . '/uploads/contacto';
	if (!is_dir($uploadsDir) && !mkdir($uploadsDir, 0755, true) && !is_dir($uploadsDir)) {
		error_log('contacto.php: no se pudo crear el directorio de subidas ' . $uploadsDir);
		responder(500, false, 'No se ha podido guardar el archivo adjunto. Inténtalo de nuevo o sin adjunto.');
	}

	$nombreSeguro = preg_replace('/[^A-Za-z0-9_.-]/', '_', pathinfo($archivo['name'], PATHINFO_FILENAME));
	$archivoNombreGuardado = bin2hex(random_bytes(8)) . '_' . $nombreSeguro . '.' . $extension;
	$destino = $uploadsDir . '/' . $archivoNombreGuardado;

	if (!move_uploaded_file($archivo['tmp_name'], $destino)) {
		error_log('contacto.php: move_uploaded_file falló para ' . $destino);
		responder(500, false, 'No se ha podido guardar el archivo adjunto. Inténtalo de nuevo o sin adjunto.');
	}
}

// --- Guardar en MariaDB ---
try {
	$dsn = sprintf('mysql:host=%s;dbname=%s;charset=utf8mb4', $config['db_host'], $config['db_name']);
	$pdo = new PDO($dsn, $config['db_user'], $config['db_pass'], [
		PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
		PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
		PDO::ATTR_EMULATE_PREPARES => false,
	]);

	$stmt = $pdo->prepare(
		'INSERT INTO contactos_web (nombre, empresa, email, telefono, mensaje, datos_simulacion, archivo_nombre, ip)
		 VALUES (:nombre, :empresa, :email, :telefono, :mensaje, :datos_simulacion, :archivo_nombre, :ip)',
	);
	$stmt->execute([
		':nombre' => $nombre,
		':empresa' => $empresa !== '' ? $empresa : null,
		':email' => $email,
		':telefono' => $telefono !== '' ? $telefono : null,
		':mensaje' => $mensaje,
		':datos_simulacion' => $datosSimulacion !== '' ? $datosSimulacion : null,
		':archivo_nombre' => $archivoNombreGuardado,
		':ip' => $_SERVER['REMOTE_ADDR'] ?? null,
	]);
} catch (Throwable $e) {
	error_log('contacto.php: error de base de datos — ' . $e->getMessage());
	responder(500, false, 'No se ha podido guardar tu mensaje. Inténtalo de nuevo en unos minutos.');
}

// --- Envío de emails (interno + confirmación al cliente) ---
// Un fallo aquí no debe impedir la respuesta de éxito: el dato ya está a salvo en la base de datos.
enviarEmailsContacto($config, [
	'nombre' => $nombre,
	'empresa' => $empresa,
	'email' => $email,
	'telefono' => $telefono,
	'mensaje' => $mensaje,
	'datos_simulacion' => $datosSimulacion,
	'archivo_nombre_original' => $archivo['name'] ?? null,
	'archivo_ruta' => $archivoNombreGuardado !== null ? ($uploadsDir . '/' . $archivoNombreGuardado) : null,
	'fecha' => (new DateTimeImmutable())->format('d/m/Y H:i'),
	'telefono_contacto' => '639 00 38 17',
]);

responder(200, true, 'Mensaje enviado. Te responderemos a la mayor brevedad.');
