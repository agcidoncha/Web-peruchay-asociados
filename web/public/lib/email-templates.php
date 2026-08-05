<?php
declare(strict_types=1);

/**
 * Plantillas HTML de los emails del formulario de contacto.
 * Colores tomados de paleta-colores-pya.md (morado #70698a, oscuro #3d3752).
 */

function emailEstiloBase(): string
{
	return <<<CSS
		body { margin: 0; padding: 0; background: #f6f7fb; font-family: Georgia, 'Times New Roman', serif; }
		.wrap { max-width: 560px; margin: 32px auto; background: #ffffff; border-radius: 16px; overflow: hidden; border: 1px solid #e5e1f0; }
		.header { background: #3d3752; padding: 20px 28px; display: flex; align-items: center; }
		.header-inner { display: table; }
		.badge { display: inline-block; width: 36px; height: 36px; background: #ffffff; border-radius: 50%; text-align: center; line-height: 36px; font-weight: bold; color: #3d3752; font-size: 13px; vertical-align: middle; }
		.brand { color: #ffffff; font-size: 15px; letter-spacing: 0.08em; text-transform: uppercase; vertical-align: middle; padding-left: 12px; }
		.body { padding: 28px; }
		h1 { font-size: 22px; color: #1f2937; margin: 0 0 18px; font-weight: 600; }
		p { font-family: Arial, Helvetica, sans-serif; color: #1f2937; font-size: 14.5px; line-height: 1.6; margin: 0 0 16px; }
		.card { background: #faf9fe; border-radius: 12px; padding: 18px 20px; margin-bottom: 16px; }
		.card-title { font-family: Georgia, serif; font-weight: 600; font-size: 15px; color: #1f2937; margin: 0 0 6px; }
		.card-text { font-family: Arial, Helvetica, sans-serif; font-size: 14px; color: #1f2937; margin: 0; line-height: 1.6; }
		.card-text strong { color: #1f2937; }
		.row { font-family: Arial, Helvetica, sans-serif; font-size: 14px; color: #1f2937; padding: 10px 0; border-bottom: 1px solid #e5e1f0; }
		.row:last-child { border-bottom: none; }
		.row-label { display: block; font-size: 11.5px; letter-spacing: 0.04em; text-transform: uppercase; color: #6b7280; margin-bottom: 3px; }
		.footer { text-align: center; padding: 18px 28px 26px; font-family: Arial, Helvetica, sans-serif; font-size: 12px; color: #6b7280; letter-spacing: 0.06em; text-transform: uppercase; }
	CSS;
}

function emailEscapar(string $valor): string
{
	return htmlspecialchars($valor, ENT_QUOTES, 'UTF-8');
}

function emailCabecera(): string
{
	return <<<HTML
		<tr>
			<td class="header">
				<span class="badge">P&amp;A</span>
				<span class="brand">Perucha &amp; Asociados</span>
			</td>
		</tr>
	HTML;
}

/**
 * Email interno para info@peruchayasociados.com con todos los datos del formulario.
 */
function emailPlantillaInterna(array $datos): string
{
	$estilo = emailEstiloBase();
	$cabecera = emailCabecera();

	$filas = '';
	$campos = [
		'Nombre' => $datos['nombre'],
		'Empresa' => $datos['empresa'] ?: '—',
		'Email' => $datos['email'],
		'Teléfono' => $datos['telefono'] ?: '—',
		'Mensaje' => nl2br(emailEscapar($datos['mensaje']), false),
	];
	if (!empty($datos['datos_simulacion'])) {
		$campos['Datos de la simulación'] = nl2br(emailEscapar($datos['datos_simulacion']), false);
	}
	if (!empty($datos['archivo_nombre_original'])) {
		$campos['Adjunto'] = emailEscapar($datos['archivo_nombre_original']);
	}
	$campos['Fecha'] = $datos['fecha'];

	foreach ($campos as $etiqueta => $valor) {
		$etiquetaEscapada = emailEscapar($etiqueta);
		$valorFinal = in_array($etiqueta, ['Mensaje', 'Datos de la simulación'], true) ? $valor : emailEscapar((string) $valor);
		$filas .= "<tr><td class=\"row\"><span class=\"row-label\">{$etiquetaEscapada}</span>{$valorFinal}</td></tr>";
	}

	return <<<HTML
		<!DOCTYPE html>
		<html lang="es">
		<head>
			<meta charset="utf-8" />
			<meta name="viewport" content="width=device-width, initial-scale=1" />
			<title>Nuevo mensaje recibido</title>
			<style>{$estilo}</style>
		</head>
		<body>
			<table role="presentation" width="100%" cellpadding="0" cellspacing="0">
				<tr>
					<td>
						<table role="presentation" class="wrap" width="100%" cellpadding="0" cellspacing="0">
							{$cabecera}
							<tr>
								<td class="body">
									<h1>Nuevo mensaje recibido</h1>
									<table role="presentation" width="100%" cellpadding="0" cellspacing="0">
										{$filas}
									</table>
								</td>
							</tr>
						</table>
					</td>
				</tr>
			</table>
		</body>
		</html>
	HTML;
}

/**
 * Email de confirmación para el cliente que ha rellenado el formulario.
 */
function emailPlantillaCliente(array $datos): string
{
	$estilo = emailEstiloBase();
	$cabecera = emailCabecera();

	$nombre = emailEscapar($datos['nombre']);
	$empresa = emailEscapar($datos['empresa'] ?: '—');
	$email = emailEscapar($datos['email']);
	$telefonoCliente = emailEscapar($datos['telefono'] ?: '—');
	$telefonoContacto = emailEscapar($datos['telefono_contacto']);

	$tarjetaSimulacion = '';
	if (!empty($datos['datos_simulacion'])) {
		$datosSimulacionHtml = nl2br(emailEscapar($datos['datos_simulacion']), false);
		$tarjetaSimulacion = <<<HTML
			<div class="card">
				<p class="card-title">Resultado de tu simulación</p>
				<p class="card-text">{$datosSimulacionHtml}</p>
			</div>
		HTML;
	}

	return <<<HTML
		<!DOCTYPE html>
		<html lang="es">
		<head>
			<meta charset="utf-8" />
			<meta name="viewport" content="width=device-width, initial-scale=1" />
			<title>Hemos recibido tu mensaje</title>
			<style>{$estilo}</style>
		</head>
		<body>
			<table role="presentation" width="100%" cellpadding="0" cellspacing="0">
				<tr>
					<td>
						<table role="presentation" class="wrap" width="100%" cellpadding="0" cellspacing="0">
							{$cabecera}
							<tr>
								<td class="body">
									<h1>Hemos recibido tu mensaje</h1>
									<p>Gracias por contactar con Perucha &amp; Asociados. Hemos recibido tu mensaje correctamente y nos pondremos en contacto contigo lo antes posible.</p>

									<div class="card">
										<p class="card-title">Resumen</p>
										<p class="card-text">
											<strong>Nombre:</strong> {$nombre}<br />
											<strong>Empresa:</strong> {$empresa}<br />
											<strong>Email:</strong> {$email}<br />
											<strong>Teléfono:</strong> {$telefonoCliente}
										</p>
									</div>

									{$tarjetaSimulacion}

									<div class="card">
										<p class="card-title">Plazo de respuesta</p>
										<p class="card-text">24-48 h laborables</p>
									</div>

									<div class="card">
										<p class="card-title">Contacto</p>
										<p class="card-text">{$telefonoContacto}</p>
									</div>
								</td>
							</tr>
							<tr>
								<td class="footer">Claridad. Rigor. Acción.</td>
							</tr>
						</table>
					</td>
				</tr>
			</table>
		</body>
		</html>
	HTML;
}
