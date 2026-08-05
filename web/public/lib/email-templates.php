<?php
declare(strict_types=1);

/**
 * Plantillas HTML de los emails del formulario de contacto.
 * Colores tomados de paleta-colores-pya.md (morado #70698a, oscuro #3d3752).
 *
 * Todo el estilo va inline (style="..." en cada elemento), sin <style> en el <head>:
 * la app de Gmail para Android/iOS (a diferencia de Gmail web) ignora los bloques
 * <style>, así que un email que dependa de clases CSS se ve sin ningún diseño ahí.
 */

function emailEscapar(string $valor): string
{
	return htmlspecialchars($valor, ENT_QUOTES, 'UTF-8');
}

function emailCabecera(): string
{
	return <<<HTML
		<tr>
			<td bgcolor="#3d3752" style="background:#3d3752; padding:20px 28px;">
				<table role="presentation" width="100%" cellpadding="0" cellspacing="0" border="0">
					<tr>
						<td width="36" height="36" bgcolor="#ffffff" style="width:36px; height:36px; background:#ffffff; border-radius:50%; text-align:center; vertical-align:middle; font-family:Georgia,'Times New Roman',serif; font-weight:bold; color:#3d3752; font-size:13px;">P&amp;A</td>
						<td style="padding-left:12px; font-family:Georgia,'Times New Roman',serif; color:#ffffff; font-size:15px; letter-spacing:0.08em; text-transform:uppercase; vertical-align:middle; mso-line-height-rule:exactly;">Perucha &amp; Asociados</td>
					</tr>
				</table>
			</td>
		</tr>
	HTML;
}

function emailPie(): string
{
	return <<<HTML
		<tr>
			<td align="center" style="text-align:center; padding:18px 28px 26px; font-family:Arial,Helvetica,sans-serif; font-size:12px; color:#6b7280; letter-spacing:0.06em; text-transform:uppercase; mso-line-height-rule:exactly;">Claridad. Rigor. Acción.</td>
		</tr>
	HTML;
}

/**
 * Tarjeta genérica (fondo lavanda claro, título serif, texto sans-serif).
 */
function emailTarjeta(string $titulo, string $contenidoHtml): string
{
	$tituloEscapado = emailEscapar($titulo);
	return <<<HTML
		<table role="presentation" width="100%" cellpadding="0" cellspacing="0" border="0" style="margin-bottom:16px;">
			<tr>
				<td bgcolor="#faf9fe" style="background:#faf9fe; border-radius:12px; padding:18px 20px;">
					<p style="margin:0 0 6px; font-family:Georgia,'Times New Roman',serif; font-weight:bold; font-size:15px; color:#1f2937; mso-line-height-rule:exactly;">{$tituloEscapado}</p>
					<div style="font-family:Arial,Helvetica,sans-serif; font-size:14px; color:#1f2937; line-height:1.6; mso-line-height-rule:exactly;">{$contenidoHtml}</div>
				</td>
			</tr>
		</table>
	HTML;
}

function emailEnvoltura(string $titulo, string $cuerpoHtml): string
{
	$cabecera = emailCabecera();
	$pie = emailPie();
	$tituloEscapado = emailEscapar($titulo);

	return <<<HTML
		<!DOCTYPE html>
		<html lang="es" xmlns:v="urn:schemas-microsoft-com:vml" xmlns:o="urn:schemas-microsoft-com:office:office">
		<head>
			<meta charset="utf-8" />
			<meta name="viewport" content="width=device-width, initial-scale=1" />
			<meta name="x-apple-disable-message-reformatting" />
			<meta http-equiv="X-UA-Compatible" content="IE=edge" />
			<!--[if mso]>
			<noscript>
				<xml>
					<o:OfficeDocumentSettings>
						<o:PixelsPerInch>96</o:PixelsPerInch>
					</o:OfficeDocumentSettings>
				</xml>
			</noscript>
			<![endif]-->
			<title>{$tituloEscapado}</title>
		</head>
		<body style="margin:0; padding:0; background:#f6f7fb; font-family:Georgia,'Times New Roman',serif; -webkit-text-size-adjust:100%; -ms-text-size-adjust:100%;">
			<table role="presentation" width="100%" cellpadding="0" cellspacing="0" border="0" style="background:#f6f7fb;">
				<tr>
					<td align="center">
						<!--[if mso]>
						<table role="presentation" width="560" cellpadding="0" cellspacing="0" border="0" align="center"><tr><td>
						<![endif]-->
						<table role="presentation" width="560" cellpadding="0" cellspacing="0" border="0" align="center" bgcolor="#ffffff" style="width:560px; max-width:560px; margin:32px auto; background:#ffffff; border-radius:16px; border:1px solid #e5e1f0;">
							{$cabecera}
							<tr>
								<td style="padding:28px;">
									<h1 style="font-family:Georgia,'Times New Roman',serif; font-size:22px; color:#1f2937; margin:0 0 18px; font-weight:600; mso-line-height-rule:exactly;">{$tituloEscapado}</h1>
									{$cuerpoHtml}
								</td>
							</tr>
							{$pie}
						</table>
						<!--[if mso]>
						</td></tr></table>
						<![endif]-->
					</td>
				</tr>
			</table>
		</body>
		</html>
	HTML;
}

/**
 * Email interno para info@peruchayasociados.com con todos los datos del formulario.
 */
function emailPlantillaInterna(array $datos): string
{
	$filas = '';
	$campos = [
		'Nombre' => emailEscapar($datos['nombre']),
		'Empresa' => emailEscapar($datos['empresa'] ?: '—'),
		'Email' => emailEscapar($datos['email']),
		'Teléfono' => emailEscapar($datos['telefono'] ?: '—'),
		'Mensaje' => nl2br(emailEscapar($datos['mensaje']), false),
	];
	if (!empty($datos['datos_simulacion'])) {
		$campos['Datos de la simulación'] = nl2br(emailEscapar($datos['datos_simulacion']), false);
	}
	if (!empty($datos['archivo_nombre_original'])) {
		$campos['Adjunto'] = emailEscapar($datos['archivo_nombre_original']);
	}
	$campos['Fecha'] = emailEscapar($datos['fecha']);

	$total = count($campos);
	$i = 0;
	foreach ($campos as $etiqueta => $valor) {
		$i++;
		$etiquetaEscapada = emailEscapar($etiqueta);
		$borde = $i < $total ? 'border-bottom:1px solid #e5e1f0;' : '';
		$filas .= <<<HTML
			<tr>
				<td style="padding:10px 0; {$borde} font-family:Arial,Helvetica,sans-serif; font-size:14px; color:#1f2937; mso-line-height-rule:exactly;">
					<span style="display:block; font-size:11.5px; letter-spacing:0.04em; text-transform:uppercase; color:#6b7280; margin-bottom:3px;">{$etiquetaEscapada}</span>
					{$valor}
				</td>
			</tr>
		HTML;
	}

	$cuerpo = <<<HTML
		<table role="presentation" width="100%" cellpadding="0" cellspacing="0">
			{$filas}
		</table>
	HTML;

	return emailEnvoltura('Nuevo mensaje recibido', $cuerpo);
}

/**
 * Email de confirmación para el cliente que ha rellenado el formulario.
 */
function emailPlantillaCliente(array $datos): string
{
	$nombre = emailEscapar($datos['nombre']);
	$empresa = emailEscapar($datos['empresa'] ?: '—');
	$email = emailEscapar($datos['email']);
	$telefonoCliente = emailEscapar($datos['telefono'] ?: '—');
	$telefonoContacto = emailEscapar($datos['telefono_contacto']);

	$resumen = <<<HTML
		<strong>Nombre:</strong> {$nombre}<br />
		<strong>Empresa:</strong> {$empresa}<br />
		<strong>Email:</strong> {$email}<br />
		<strong>Teléfono:</strong> {$telefonoCliente}
	HTML;

	$tarjetaResumen = emailTarjeta('Resumen', $resumen);
	$tarjetaSimulacion = '';
	if (!empty($datos['datos_simulacion'])) {
		$datosSimulacionHtml = nl2br(emailEscapar($datos['datos_simulacion']), false);
		$tarjetaSimulacion = emailTarjeta('Resultado de tu simulación', $datosSimulacionHtml);
	}
	$tarjetaPlazo = emailTarjeta('Plazo de respuesta', '24-48 h laborables');
	$tarjetaContacto = emailTarjeta('Contacto', $telefonoContacto);

	$cuerpo = <<<HTML
		<p style="font-family:Arial,Helvetica,sans-serif; color:#1f2937; font-size:14.5px; line-height:1.6; margin:0 0 16px; mso-line-height-rule:exactly;">Gracias por contactar con Perucha &amp; Asociados. Hemos recibido tu mensaje correctamente y nos pondremos en contacto contigo lo antes posible.</p>
		{$tarjetaResumen}
		{$tarjetaSimulacion}
		{$tarjetaPlazo}
		{$tarjetaContacto}
	HTML;

	return emailEnvoltura('Hemos recibido tu mensaje', $cuerpo);
}
