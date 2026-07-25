# Web Perucha y Asociados — contexto del proyecto

Rediseño de peruchayasociados.com. Antes de tocar contenido o código, revisar:

- `esquema-web-PyA.md` — documento único de referencia: estructura, contenido y estado de cada página
- `paleta-colores-pya.md` — colores exactos de la marca
- `faqs-pya.md` — banco completo de preguntas frecuentes

No dupliques contenido de estos documentos en otro sitio (ni en este archivo, ni en uno nuevo) — si algo cambia, se actualiza en el documento correspondiente.

## Stack y despliegue

Astro, sin CMS ni WordPress, contenido en `web/`. Hosting PHP + MariaDB ya contratado, deploy automatizado por FTP vía GitHub Actions en cada push a `web/`. Detalle completo en `esquema-web-PyA.md` → "Decisiones técnicas".

## Reglas de trabajo

- Cualquier cambio que afecte a producción (deploy, push que dispare el FTP) se confirma explícitamente antes de lanzarlo, explicando con claridad qué se va a ver afectado.
- Nunca pasar credenciales (FTP, contraseñas, tokens) por el chat — se gestionan como GitHub Secrets.
