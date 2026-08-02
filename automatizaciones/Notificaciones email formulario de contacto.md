# Notificaciones por email del formulario de contacto

## Objetivo

Cuando alguien envía el formulario de contacto (`web/public/contacto.php`), hoy los datos solo se guardan en la tabla `contactos_web` de MariaDB — nadie recibe ningún aviso. Se añadirán dos envíos automáticos:

1. **A `info@peruchayasociados.com`** — aviso interno de que ha entrado un mensaje nuevo, con todos los datos del formulario.
2. **Al email que ha introducido el cliente** — confirmación de que su mensaje se ha recibido correctamente.

## Decisión técnica: método de envío

**Decidido:** SMTP autenticado con **PHPMailer**, usando una cuenta de correo real del hosting (ej. `info@peruchayasociados.com` o una cuenta técnica dedicada). Se descarta la función `mail()` nativa de PHP por su alta probabilidad de acabar en spam en hosting compartido sin configuración SPF/DKIM adecuada.

### Lo que esto implica

- **Nuevas credenciales necesarias** en `config.php` (nunca en el chat, nunca en git): host SMTP, puerto, usuario, contraseña de la cuenta de correo remitente. El usuario deberá rellenar `config.php` en el servidor a mano, igual que hizo con las credenciales de base de datos.
- **Nueva dependencia PHP**: PHPMailer no es una función nativa, hay que incorporar la librería. Como el proyecto no usa Composer todavía para el backend PHP, la opción más simple es descargar los archivos de PHPMailer (`src/PHPMailer.php`, `src/SMTP.php`, `src/Exception.php`) y colocarlos directamente en `web/public/lib/phpmailer/`, sin gestor de dependencias. Alternativa: añadir `composer install` como paso del workflow de GitHub Actions antes del despliegue FTP, subiendo la carpeta `vendor/`. **Pendiente de decidir cuál de las dos.**

## Qué contendrá cada email

### Email interno (a info@peruchayasociados.com)

- Asunto: algo como `Nuevo mensaje de contacto — [nombre del cliente]`.
- Cuerpo: todos los campos del formulario (nombre, empresa, email, teléfono, mensaje, datos de simulación si los hay, si adjuntó archivo).
- **Pendiente de decidir:** ¿se adjunta el archivo subido directamente al email, o solo se menciona que existe y hay que ir a buscarlo al servidor?

### Email de confirmación al cliente

- Asunto: algo como `Hemos recibido tu mensaje — Perucha y Asociados`.
- Cuerpo: texto breve confirmando la recepción, sin repetir todos sus datos personales (por privacidad, no reenviarle su propio teléfono/mensaje tal cual salvo que se decida lo contrario). **Pendiente de redactar el texto exacto y de decidir si se incluye un resumen de lo enviado.**
- Remitente visible: `info@peruchayasociados.com` (o el nombre "Perucha y Asociados").

## Campos disponibles hoy en el formulario

(`web/src/components/home/Contact.astro`, enviados a `contacto.php`)

- `nombre` (obligatorio)
- `empresa` (opcional)
- `email` (obligatorio)
- `telefono` (opcional)
- `datos_simulacion` (oculto, se prellena solo si viene de un simulador)
- `mensaje` (obligatorio)
- `archivo` (opcional, adjunto)

## Comportamiento ante fallos

**Pendiente de decidir:** si el guardado en base de datos funciona pero el envío de email falla (ej. SMTP caído), ¿qué debe ver el usuario?

- Opción A: el formulario muestra igualmente "Mensaje enviado" (el dato ya está a salvo en la base de datos, el email es secundario) y el fallo de envío solo se registra en el log del servidor.
- Opción B: se considera un fallo parcial y se avisa de algún modo al usuario.

Recomendación por defecto: Opción A — el email es una notificación, no el medio de guardado real; no se debe bloquear ni alarmar al usuario por un fallo de SMTP que no depende de él.

## Pendiente antes de implementar

1. Elegir cuenta de correo remitente y conseguir sus credenciales SMTP (usuario, contraseña, host, puerto, si usa SSL/TLS).
2. Decidir cómo se incorpora PHPMailer (archivos sueltos vs. Composer en el workflow).
3. Redactar el texto exacto del email de confirmación al cliente.
4. Decidir si el archivo adjunto se reenvía por email o no.
5. Confirmar el comportamiento ante fallo de envío (ver sección anterior).
6. Implementar, probar en local con una cuenta SMTP de pruebas, y verificar en producción con un envío real antes de darlo por cerrado.
