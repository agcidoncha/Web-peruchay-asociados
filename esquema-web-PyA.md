# Esquema de la web — Perucha y Asociados (PyA)

Documento único de referencia: estructura, contenido y estado de cada página. No hay otro documento de contenidos aparte de este — si algo no está aquí, no está decidido.

## Mapa del sitio

1. **Página principal** (`/`) — one-page con navegación por anclas
   - Inicio
   - Áreas
   - Equipo
   - Contacto
2. **Control de Gestión** (`/control-de-gestion`) — página independiente
3. **Contabilidad y Fiscalidad** (`/contabilidad-y-fiscalidad`) — página independiente
4. **Digitalización y Automatización** (`/digitalizacion-y-automatizacion`) — página independiente

4 páginas en total. Las tres páginas independientes se enlazan desde los "→ Conocer el área" de la sección Áreas, y viceversa (enlace de vuelta hacia la principal). No existe página de Equipo ni páginas individuales por persona — el equipo es una sección de la Home.

## Reglas de contenido

- No repetir la misma idea o frase en más de un punto de la web.
- Se eliminan de esta versión: Constitución de empresas, Soporte empresarial integral, Imagen corporativa (servicios de la web actual que ya no aplican).

---

## PÁGINA PRINCIPAL (Home)

### 1. Inicio (Hero)

- Título: **Soluciones para tu empresa.**
- Subtítulo: Experiencia en control de gestión, planificación y análisis financiero, contabilidad y fiscalidad, digitalización y automatización, adaptada a las necesidades de cada empresa.
- CTA: **[Hablemos]** → ancla a Contacto

Muy visual, breve, sin bloques de texto largos. Único lugar donde aparece el resumen de las 3 áreas en una frase — no se repite en ningún otro punto de la home.

*Pendiente: si lleva foto (equipo/oficina) o se queda solo tipográfico; si se añade algún dato de refuerzo (ej. "+30 años") — no decidido.*

### 2. Áreas

- Título: **¿En qué podemos ayudarte?**
- Tres tarjetas/bloques, solo titular + una frase + enlace "Conocer el área" (nada de detalle de servicios aquí — el detalle vive en la página de cada área):

  **Control de Gestión y planificación y análisis financiero**
  Información, análisis y control para conocer mejor el negocio y tomar decisiones con fundamento.
  → Conocer el área

  **Contabilidad y Fiscalidad**
  Gestión contable y fiscal rigurosa, con el respaldo de más de 30 años de experiencia profesional.
  → Conocer el área

  **Digitalización y Automatización**
  Tecnología, desarrollo digital y automatización de procesos para trabajar de forma más eficiente.
  → Conocer el área

### 3. Frase de transición (antes de Equipo)

- Título: **Experiencia que sigue evolucionando.**
- Texto: Un equipo de perfiles complementarios, con una amplia trayectoria profesional y una forma de trabajar práctica, cercana y actual.
- CTA: → Conoce al equipo

Sin repetir el listado de áreas.

### 4. Equipo

Sección de la Home (no es una página aparte). 4 tarjetas breves (nombre/rol + 2-3 líneas de trayectoria), puramente informativas — no enlazan a ningún sitio (no hay página de Equipo ni páginas individuales por persona).

**Perfil 1 — Bebo**
FP&A y Control de Gestión · Perfil senior
Experiencia en planificación financiera, presupuestos y forecast, análisis de costes y rentabilidad, reporting, KPIs y control de desviaciones, trabajando tanto en entornos multinacionales como en pymes.

**Perfil 2 — Sobrina** *(nombre real pendiente de confirmar — "Sobrina" es una nota interna, no un nombre para publicar)*
Talento joven · Perfil universitario en formación
Una perspectiva joven incorporada al trabajo del equipo, participando y aprendiendo en diferentes áreas según las necesidades de cada proyecto. Aporta una mirada actual, familiaridad con nuevos entornos y herramientas y una visión complementaria a la experiencia de los perfiles senior.

**Perfil 3** — *posible candidato: el perfil de 20 años de diseño/desarrollo/maquetación de Digitalización y Automatización (ver página C) — pendiente de confirmar si es la misma persona.*

**Perfil 4** — *pendiente, sin datos.*

*Pendiente: formato de presentación de las tarjetas (tamaño, si se amplían al hacer clic, etc.) — quedó sin decidir en una conversación anterior.*

### 5. Preguntas frecuentes (FAQ) *(nuevo — propuesta SEO)*

- 4-5 preguntas breves, tipo: "¿Necesito cambiar de asesoría para trabajar con vosotros?", "¿Trabajáis con autónomos y pymes?", "¿Cómo es el proceso de incorporación?"
- Objetivo: captar búsquedas de cola larga y optar a resultados destacados de Google (featured snippets).
- Contenido real (45 preguntas en 6 bloques) ya redactado en `faqs-pya.md`. El Bloque 6 (Colaboración y Contratación) está marcado explícitamente como destinado a la Home.
- *Pendiente: decidir si el resto se reparte por página (Bloque 1 en Home, Bloque 2 en Control de Gestión, Bloque 3 en Contabilidad y Fiscalidad, Bloques 4-5 en Digitalización y Automatización) o se deja todo en la Home — propuesta hecha, sin confirmar.*

### 6. Diagnóstico rápido *(nuevo — propuesta)*

- Mini-cuestionario de 4-5 preguntas ("¿Qué necesita tu empresa?") que recomienda al final qué área contratar (Control de Gestión / Contabilidad y Fiscalidad / Digitalización), o una combinación.
- Termina enlazando al formulario de Contacto, idealmente con la recomendación ya indicada para que el usuario no parta de cero.
- Objetivo: responder de forma interactiva a la duda ya recogida en el FAQ ("¿puedo contratar solo un área?") y mejorar la conversión frente a un formulario en frío.
- *Pendiente: redactar las preguntas y la lógica de recomendación con el usuario.*

### 7. Contacto

- Formulario (campos a definir: nombre, empresa, email, teléfono, mensaje)
- Texto de acompañamiento "Lo que recibirá" (Claridad / Rigor / Acción), trasladado aquí desde la web actual — una sola vez, no se repite en las páginas de área.
- El formulario envía los datos a un backend propio en PHP + MariaDB (hosting ya contratado), no a un servicio externo.

### Footer *(transversal, no es una sección de scroll)*

- Datos NAP visibles (Nombre, Villaviciosa de Odón - Madrid, teléfono) — no solo dentro del formulario de contacto. Clave para SEO local y coherencia con la ficha de Google Business Profile.
- Tagline de LinkedIn "Tu visión, nuestra dedicación."
- Enlaces a las 3 páginas de área.

---

## PÁGINAS INDEPENDIENTES

Cada una necesita, como mínimo: hero propio (título + breve descripción), detalle de servicios concretos, CTA final hacia Contacto, enlace de vuelta a la principal.

### A. Control de Gestión

Contenido reaprovechado de la web actual (servicio "Control de gestión" + el bloque "Cómo trabajamos", que encaja de forma natural con esta área):

- Informes claros sobre ingresos, costes y márgenes
- Detección de áreas de mejora y alertas tempranas
- Información organizada para decisiones rápidas y fundamentadas
- Método de trabajo en 3 pasos: recogemos datos → reportamos claro → recomendamos acción (único lugar de la web donde aparece este método paso a paso)

**Herramienta interactiva — Calculadora de punto de equilibrio** *(nuevo — propuesta)*
Con costes fijos, coste variable por unidad y precio de venta, calcula cuántas ventas necesita hacer la empresa para empezar a ganar dinero. Cifra orientativa, no un cálculo exacto. Conecta con "análisis de costes y rentabilidad" (perfil de Bebo) e "informes claros sobre ingresos, costes y márgenes". Termina con CTA a Contacto.

*Pendiente: redactar el hero propio (título + descripción breve) — puede usar como base la frase ya definida en la sección Áreas de la Home. Definir la lógica exacta de la calculadora.*

### B. Contabilidad y Fiscalidad

Fusión de los dos servicios actuales "Contabilidad completa" y "Gestión fiscal eficaz", sin solaparse:

- Registro contable según normativa vigente, libros y documentación oficial
- Presentación de impuestos y cumplimiento tributario puntual
- Recomendaciones de optimización fiscal
- Mención del respaldo de +30 años de experiencia profesional (dato que solo aparece aquí, no en la home ni en las otras áreas)

**Herramienta interactiva — Simulador de ahorro fiscal / "autónomo vs sociedad"** *(nuevo — propuesta)*
Cifra orientativa (no un cálculo exacto) sobre qué opción sale mejor fiscalmente. Es una de las búsquedas más habituales en Google ("calculadora autónomo sociedad"), así que además de captar contacto ayuda al SEO de esta página. Termina con CTA a Contacto.

*Pendiente: redactar el hero propio (título + descripción breve). Definir la lógica exacta del simulador.*

### C. Digitalización y Automatización

Sin contenido reaprovechable de la web actual (es un área nueva). Contenido definido a partir del perfil de 20 años de experiencia en diseño y desarrollo:

- Hero: "Automatización de procesos con inteligencia artificial, desarrollo web y diseño visual, con el respaldo de más de 20 años de experiencia en diseño y desarrollo."
- Servicios:
  - **Automatización de procesos con IA** — Identificamos tareas repetitivas en tu empresa y las automatizamos con herramientas de inteligencia artificial, para liberar tiempo del equipo hacia lo que realmente aporta valor.
  - **Desarrollo web** — Diseño y desarrollo de páginas web a medida, adaptadas a las necesidades de cada negocio.
  - **Diseño visual y maquetación** — Diseño gráfico, identidad visual y maquetación de materiales digitales e impresos.
- Bloque de credibilidad: "Más de 20 años de experiencia como diseñador, desarrollador y maquetador" (dato exclusivo de esta página, igual que el "+30 años" en Contabilidad y Fiscalidad).

**Herramienta interactiva — Estimador de horas ahorradas con automatización** *(nuevo — propuesta)*
Preguntas tipo "¿cuántas horas al mes dedicáis a tareas repetitivas (facturación manual, introducir datos, etc.)?" y da una cifra orientativa de horas y coste ahorrable automatizando. Sirve de gancho de entrada para la página que menos contenido propio tenía. Termina con CTA a Contacto.

*Pendiente: definir la lógica exacta del estimador.*

*Pendiente de confirmar: si el perfil de 20 años es uno de los 2 perfiles de equipo aún vacíos (3 o 4) — si es así, se reutiliza ahí con nombre y foto (ver sección 4. Equipo).*

---

## Material adicional — Instagram y LinkedIn (@peruchayasociados)

- Tagline de LinkedIn: "Tu visión, nuestra dedicación." — distinta al eslogan de la web ("Información clara + contabilidad rigurosa"). Se usa como frase de cierre en el footer, sin repetir el eslogan del hero.
- Ubicación: Villaviciosa de Odón, Madrid (dato para footer / contacto, no estaba en la web actual).
- Tono de redes: frases cortas de impacto tipo pregunta-respuesta ("¿Por qué cada trimestre sufres para pagar el IVA? No es el IVA."), con fondo morado oscuro y texto blanco grande. Referencia de tono para textos breves (ej. la Frase de transición de la Home), no para el cuerpo de las páginas de área.
- Otros titulares vistos en el feed, banco de frases si se necesita contenido adicional: "Menos complejidad, más claridad" / "No todo lo que crece mejora" / "Anticiparse marca la diferencia".

---

## Decisiones técnicas

- **Stack**: Astro, sin CMS ni WordPress. El contenido vive en los archivos del proyecto; los cambios se hacen a través de Claude Code.
- **Hosting**: hosting PHP + MariaDB ya contratado (donde estaba el WordPress anterior). Sin servicio nuevo de pago.
- **Deploy**: automatizado con GitHub Action — cada push a `web/` compila el sitio y lo sube por FTP a `www/` en el hosting. Credenciales guardadas como GitHub Secrets (`FTP_SERVER`, `FTP_USERNAME`, `FTP_PASSWORD`), nunca en el repositorio. Probado y validado.
- **Formulario de contacto**: backend propio en PHP que guarda los envíos en una tabla de MariaDB (no un servicio externo).
- **Repositorio**: [github.com/agcidoncha/Web-peruchay-asociados](https://github.com/agcidoncha/Web-peruchay-asociados), conectado también a Claude Design para el trabajo de diseño visual.

---

## SEO — requisito técnico prioritario

El SEO es un objetivo importantísimo del proyecto, no un añadido opcional. Cualquier código que se escriba para esta web debe cumplir esto desde el primer commit, no revisarse al final:

- **Meta tags únicos por página**: `<title>` y meta descripción distintos en las 4 páginas, con palabras clave relevantes a cada área (ej. "Contabilidad y Fiscalidad en Madrid | Perucha y Asociados").
- **Un único `<h1>` por página**, jerarquía correcta de encabezados (`h2`/`h3` por sección, sin saltarse niveles).
- **HTML semántico**: `<header>`, `<nav>`, `<main>`, `<section>`, `<footer>`, no `<div>` genéricos donde exista una etiqueta semántica.
- **Sitemap.xml y robots.txt** generados automáticamente (Astro lo permite con la integración `@astrojs/sitemap`).
- **URLs limpias**: las ya definidas en el mapa del sitio (`/control-de-gestion`, etc.), sin parámetros ni mayúsculas.
- **Rendimiento**: aprovechar que Astro genera HTML estático (sin JS innecesario) para mantener buenos Core Web Vitals — imágenes optimizadas y con `alt` descriptivo siempre.
- **Datos estructurados (schema.org)**: marcado `LocalBusiness` o `ProfessionalService` en la Home, con NAP (nombre, dirección, teléfono) — refuerza el SEO local ya priorizado en el footer.
- **Open Graph / Twitter Cards**: imagen y descripción al compartir cualquier página en redes.
- **Enlazado interno correcto**: los enlaces "Conocer el área" y "Volver a inicio" como `<a>` reales (no solo JS), para que Google los rastree.

---

## Pendientes para cerrar el esquema

- Perfiles 3 y 4 del equipo (confirmar si el perfil 3 es el de Digitalización y Automatización; datos del perfil 4)
- Nombre real del Perfil 2 (actualmente solo "Sobrina", nota interna)
- Formato de las tarjetas de Equipo (tamaño, expandibles, etc.)
- Hero de la Home: foto sí/no, datos de refuerzo sí/no
- Hero propio de Control de Gestión y de Contabilidad y Fiscalidad (título + descripción breve)
- Preguntas y respuestas definitivas del FAQ (hay borrador sin confirmar)
- Preguntas y lógica de recomendación del Diagnóstico rápido (Home)
- Lógica de la Calculadora de punto de equilibrio (Control de Gestión)
- Lógica del Simulador de ahorro fiscal / autónomo vs sociedad (Contabilidad y Fiscalidad)
- Lógica del Estimador de horas ahorradas con automatización (Digitalización y Automatización)
- Campos exactos del formulario de contacto
- Teléfono de contacto para el NAP del footer (ya tenemos la ubicación: Villaviciosa de Odón, Madrid)
- Estilo visual definitivo (en curso en Claude Design)
