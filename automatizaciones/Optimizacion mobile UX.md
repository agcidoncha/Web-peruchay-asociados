# Optimización de datos mostrados en mobile

## Objetivo

Hoy la web es responsive (se adapta visualmente, sin desbordamientos, verificado en la auditoría del 2026-08-01), pero **muestra el mismo contenido en mobile que en escritorio**, solo reordenado o apilado. El objetivo es revisar página por página qué información tiene sentido **ocultar, resumir o simplificar en mobile** para mejorar la experiencia de uso en pantallas pequeñas, en vez de obligar a un scroll largo con todo el detalle de escritorio.

Este documento incluye mi propuesta concreta para cada punto, no solo la lista de candidatos. **Sigue siendo una propuesta a validar contigo antes de tocar código — nada de esto está decidido todavía.**

## Criterio general que propongo

En mobile, priorizar que el usuario llegue rápido a la acción (leer lo esencial, decidir, pulsar el CTA) y mover el detalle secundario a "bajo demanda" (acordeones, "ver más") en vez de quitarlo del todo. No propongo eliminar información en ningún caso, solo reordenar su prioridad visual. Los avisos legales/orientativos de los simuladores y los textos de ayuda de los formularios los dejo siempre visibles sin colapsar, porque su función es prevenir errores o malentendidos en el momento exacto en que el usuario los necesita.

## Home (`index.astro`)

- **`Hero.astro`** — **Propuesta: mantener el carrusel tal cual.** Ya es ligero (una imagen + puntos), no aporta acortarlo, y los puntos ya tienen el área de toque ampliada (arreglado en la auditoría anterior).
- **`Areas.astro`** — **Propuesta: acortar el párrafo de cada tarjeta a mobile a una frase más corta (máx. ~10-12 palabras), en vez del párrafo completo de escritorio.** El usuario decide si pulsa "Conocer el área" con el titular y una frase, no necesita el detalle completo aquí — ya lo tiene en la página del área.
- **`Diagnostico.astro`** — **Propuesta: sin cambios.** Es un flujo de pregunta-por-pantalla, ya está optimizado por diseño.
- **`Team.astro`** — **Propuesta: sin cambios.** Los 4 textos de perfil ya son cortos (2-3 líneas), no hay nada que ganar acortándolos más.

## Páginas de área (Finanzas y Control / Contabilidad y Fiscalidad / Digitalización y Automatización)

- **`AreaHero.astro`** — **Propuesta: reducir la altura de la imagen en mobile** (hoy probablemente ocupa un porcentaje similar al de escritorio) para que el título y el CTA aparezcan antes, sin scroll previo. Cambio puramente de CSS (`max-height` o `aspect-ratio` distinto en mobile), no afecta al contenido.
- **`NumberedServices.astro`** — **Esta es la que más impacto tendría.** Propuesta: en mobile, cada servicio se muestra con su número, título y texto introductorio siempre visibles, pero la lista de `items` (puntos con viñetas, algunas con 5-6) se colapsa dentro de un acordeón "Ver detalle" cerrado por defecto. En escritorio se queda exactamente igual que ahora.
- **`ProcessSteps.astro`** — **Propuesta: sin cambios.** Son 3 pasos cortos, no pesan en el scroll.
- **`Faq.astro`** — **Propuesta: sin cambios.** Ya es acordeón cerrado por defecto, es el patrón correcto.
- **`RelatedAreas.astro`** — **Propuesta: sin cambios.** Es 1-2 tarjetas con un párrafo corto, no merece la pena tocarlo.

## Simuladores

- **`AutonomoVsSociedad.astro`** — **Hecho (2026-08-05).** La columna "info-col" de cada paso ("¿Qué vamos a comparar?" / "¿Por qué te preguntamos esto?" / "¿Qué comprobamos?") ahora es un acordeón colapsado por defecto en mobile. Se implementó distinto a como se proponía aquí: en vez de quedarse plegada en su sitio original (debajo del formulario de cada paso), se traslada por JS a una posición fija justo debajo del disclaimer y por encima de la tarjeta del simulador, cambiando de contenido según el paso activo — así el usuario la ve antes de entrar en el formulario, no después. Escritorio sin cambios (la caja sigue junto al formulario, siempre visible). También se redujo su padding vertical en mobile.
- **`Calculadora.astro`** — Propuesta: el bloque de los 3 conceptos ("¿Qué es el punto de equilibrio?", etc.) pasa a un acordeón "¿Qué significan estos términos?" cerrado por defecto en mobile, ya que aparece siempre después del resultado y no es imprescindible para usar la calculadora.
- **`EstimadorHoras.astro`** — **Hecho (2026-08-05).** Además del stepper simplificado que ya tenía, también tenía el mismo problema de la "info-col" que `AutonomoVsSociedad.astro` (bloque "¿Qué vamos a calcular?" / "Antes de calcular" enterrado debajo del formulario en mobile). Se corrigió con el mismo patrón: acordeón colapsado, trasladado por JS a una posición fija encima de la tarjeta del simulador, cambiando de contenido según el paso activo. Escritorio sin cambios.

## Resumen de prioridad que propongo

1. **`NumberedServices`** (acordeón) — mayor impacto, se repite en las 3 páginas de área.
2. ~~`AutonomoVsSociedad` info-col (acordeón)~~ — **hecho 2026-08-05.**
3. **`Calculadora`** bloque de conceptos (acordeón).
4. **`Areas.astro`** texto corto en mobile.
5. **`AreaHero`** imagen más baja en mobile.

## Preguntas que sí necesito que respondas

1. ¿Apruebas esta lista y este orden de prioridad, o quieres cambiar algo?
2. Para los acordeones nuevos (`NumberedServices`, info-col del simulador, conceptos de la calculadora), ¿el mismo patrón visual que ya usa `Faq.astro`, o uno distinto?
3. ¿Empezamos por el punto 1 (`NumberedServices`) o prefieres que implemente los 5 puntos juntos antes de verificar en el navegador?

## Pendiente antes de implementar

1. Que confirmes la lista de arriba (o la ajustes).
2. Implementar punto por punto, verificando cada uno en mobile real (375px) y en escritorio para no romper nada ya validado.
