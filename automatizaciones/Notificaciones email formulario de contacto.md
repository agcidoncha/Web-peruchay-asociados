# Notificaciones por email del formulario de contacto

**Estado: cerrado e implementado (2026-08-05).**

## Objetivo

Cuando alguien envía el formulario de contacto (`web/public/contacto.php`), además de guardarse en la tabla `contactos_web` de MariaDB, se envían dos avisos automáticos:

1. **A `info@peruchayasociados.com`** — aviso interno con todos los datos del formulario.
2. **Al email que ha introducido el cliente** — confirmación de que su mensaje se ha recibido correctamente.

## Método de envío

SMTP autenticado con **PHPMailer v6.9.1**, archivos sueltos en `web/public/lib/phpmailer/` (sin Composer). Plantillas HTML en `web/public/lib/email-templates.php`.

**Credenciales** en `config.php` del servidor (nunca en el repo): `smtp_host`, `smtp_port`, `smtp_user`, `smtp_pass`, `smtp_from_name`, `smtp_to`. Hosting real: Dinahosting/Dinaserver — host `peruchayasociados-com.correoseguro.dinaserver.com`, puerto 465 (SSL). Ojo: `mail.peruchayasociados.com` NO funciona (error de certificado, el hosting usa un certificado compartido `*.correoseguro.dinaserver.com`).

## Qué contiene cada email

### Email interno (a info@peruchayasociados.com)

- Asunto: `Nuevo mensaje de contacto — [nombre del cliente]`.
- Cuerpo: nombre, empresa, email, teléfono, mensaje, datos de la simulación (si el formulario llegó prellenado desde un simulador), nombre del archivo adjunto (si lo hay) y fecha.
- El archivo adjunto se reenvía directamente como adjunto del email (no solo se menciona).

### Email de confirmación al cliente

- Asunto: `Hemos recibido tu mensaje — Perucha y Asociados`.
- Cuerpo: texto breve de confirmación, tarjeta "Resumen" (nombre, empresa, email, teléfono), tarjeta "Resultado de tu simulación" (solo si venía de un simulador), tarjeta "Plazo de respuesta" (24-48 h laborables) y tarjeta "Contacto" (639 00 38 17).
- Remitente visible: "Perucha & Asociados" (`info@peruchayasociados.com`).

## Compatibilidad entre clientes de correo

Las plantillas usan **estilos 100% inline** (`style=""` en cada elemento), sin ningún `<style>` en el `<head>`: la app de Gmail (Android/iOS) ignora esos bloques y el email se veía sin diseño. También se añadieron los ajustes estándar para:

- **Outlook de escritorio** (motor Word): atributos `width`/`bgcolor` además de CSS, comentarios condicionales `<!--[if mso]-->` para forzar el ancho de la tabla, `mso-line-height-rule:exactly`.
- **Apple Mail**: `meta name="x-apple-disable-message-reformatting"`.

Verificado por el usuario en Gmail Android, Outlook y Apple Mail tras el ajuste — se ve correctamente en los tres.

## Comportamiento ante fallo de envío

**Decidido:** si el guardado en base de datos funciona pero el envío de email falla (SMTP caído, credenciales incorrectas, etc.), el formulario muestra igualmente "Mensaje enviado" — el dato ya está a salvo en la base de datos, el email es una notificación secundaria. El fallo solo se registra en el log de errores de PHP del servidor (`error_log`, buscar por `contacto.php:`).

## Historial de la implementación

- 2026-08-05: implementación inicial (PHPMailer + plantillas + integración en `contacto.php`).
- 2026-08-05: detectado y corregido fallo de conexión SMTP (hostname incorrecto, ver arriba).
- 2026-08-05: añadida tarjeta "Resultado de tu simulación" al email del cliente (antes solo estaba en el interno).
- 2026-08-05: reescritas las plantillas con estilos inline tras detectar que se veían sin diseño en Gmail Android.
