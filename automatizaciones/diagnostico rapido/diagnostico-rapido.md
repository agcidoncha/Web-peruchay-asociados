# Diagnóstico rápido — Perucha y Asociados

## 1. Descripción general

El **Diagnóstico rápido** es un cuestionario interactivo breve que se mostrará dentro de la página principal de Perucha y Asociados.

Su función es ayudar a una empresa a identificar qué área de servicio puede responder mejor a su situación actual:

1. **Control de Gestión, Planificación y Análisis Financiero**
2. **Contabilidad y Fiscalidad**
3. **Digitalización y Automatización**

El diagnóstico podrá recomendar un área principal, dos áreas complementarias o una intervención combinada.

No realizará cálculos económicos, no sustituirá una valoración profesional y no ofrecerá un diagnóstico empresarial definitivo. Su resultado será únicamente orientativo.

---

## 2. Objetivos

- Ayudar al usuario que todavía no sabe qué servicio necesita.
- Traducir problemas cotidianos de la empresa en áreas concretas de ayuda.
- Explicar de forma sencilla la relación entre las tres áreas.
- Evitar que el usuario llegue al formulario de contacto sin ninguna orientación.
- Mejorar la conversión mediante una recomendación personalizada.
- Permitir que Perucha y Asociados reciba una consulta inicial mejor contextualizada.

---

## 3. Ubicación en la web

El diagnóstico formará parte de la **Home**.

Ubicación prevista en el esquema actual:

**Preguntas frecuentes → Diagnóstico rápido → Contacto**

También puede valorarse su colocación inmediatamente después de la sección **«¿En qué podemos ayudarte?»**, ya que en ese punto el usuario acaba de conocer las tres áreas. La ubicación visual definitiva queda pendiente de decidir durante el diseño de la Home.

No necesita una página independiente.

---

## 4. Presentación inicial

### Título

**Descubre qué área puede ayudar más a tu empresa**

### Texto de introducción

Responde cinco preguntas. En menos de un minuto recibirás una recomendación orientativa según la situación actual de tu empresa.

### Botón inicial

**[Comenzar diagnóstico]**

Antes de comenzar debe indicarse de forma visible que el resultado es orientativo y que la situación concreta deberá valorarse personalmente.

---

## 5. Funcionamiento de la interfaz

- Se mostrará **una pregunta cada vez**.
- Cada pregunta tendrá cuatro respuestas cerradas.
- El usuario solo podrá seleccionar una respuesta por pregunta.
- Después de seleccionar una opción podrá avanzar mediante el botón **Continuar**.
- Se mostrará el progreso: `Pregunta 1 de 5`, `Pregunta 2 de 5`, etc.
- También podrá utilizarse una barra de progreso: 20 %, 40 %, 60 %, 80 % y 100 %.
- Existirá un botón **Volver** para revisar o cambiar la respuesta anterior.
- Al finalizar se mostrará el resultado en la misma sección, sin recargar la página.
- El usuario podrá reiniciar el diagnóstico.
- La navegación deberá funcionar con teclado y ser compatible con lectores de pantalla.

---

## 6. Preguntas y respuestas

### Pregunta 1 de 5

**¿Cuál de estas situaciones preocupa más actualmente en tu empresa?**

- **A.** No tenemos suficiente control sobre costes, márgenes o rentabilidad.
- **B.** Necesitamos mejorar la gestión contable o fiscal.
- **C.** Perdemos demasiado tiempo en tareas manuales o repetitivas.
- **D.** Tenemos varios de estos problemas.

### Pregunta 2 de 5

**¿Qué aspecto tienes menos controlado actualmente?**

- **A.** Costes, márgenes y rentabilidad.
- **B.** Contabilidad, impuestos y obligaciones.
- **C.** Procesos internos, herramientas y automatizaciones.
- **D.** Varios de los anteriores.

### Pregunta 3 de 5

**¿Qué tareas consumen más tiempo en tu empresa?**

- **A.** Preparar informes y revisar datos financieros.
- **B.** Gestionar facturas, contabilidad e impuestos.
- **C.** Repetir tareas manuales entre diferentes herramientas.
- **D.** Varias de las anteriores.

### Pregunta 4 de 5

**¿Qué mejora tendría mayor impacto en tu empresa?**

- **A.** Tomar mejores decisiones con datos claros.
- **B.** Tener la contabilidad y fiscalidad mejor organizadas.
- **C.** Automatizar procesos y ahorrar tiempo.
- **D.** Mejorar varios de estos aspectos.

### Pregunta 5 de 5

**¿Qué tipo de ayuda necesitas?**

- **A.** Analizar la situación y definir mejoras concretas.
- **B.** Resolver una necesidad puntual.
- **C.** Implantar una solución y acompañar su funcionamiento.
- **D.** Todavía no lo tengo claro.

---

## 7. Lógica de recomendación

Las cuatro primeras preguntas determinarán el área recomendada.

| Respuesta | Área a la que suma |
| --- | --- |
| A | Control de Gestión |
| B | Contabilidad y Fiscalidad |
| C | Digitalización y Automatización |
| D | Necesidad combinada |

Cada respuesta A, B o C sumará **un punto** a su área correspondiente.

La respuesta D no se asignará a un área concreta. Se registrará como un indicador de que la empresa percibe varios problemas relacionados.

La quinta pregunta no sumará puntos a ninguna de las tres áreas. Se utilizará para adaptar el texto final y explicar el tipo de colaboración que parece necesitar el usuario:

| Respuesta | Orientación del resultado |
| --- | --- |
| A | Análisis inicial y propuesta de mejoras |
| B | Proyecto o intervención puntual |
| C | Implantación y acompañamiento |
| D | Primera valoración para definir necesidades |

---

## 8. Reglas para generar el resultado

### Un área principal

Se recomendará un área principal cuando obtenga claramente más puntos que las demás y no exista una presencia importante de respuestas D.

El resultado incluirá:

- Nombre del área recomendada.
- Explicación breve relacionada con las respuestas.
- Enlace a la página del área.
- Botón para solicitar una valoración.

### Un área principal y otra complementaria

Se mostrarán dos áreas cuando:

- Dos áreas empaten con la puntuación más alta.
- La segunda área quede solo un punto por debajo y las respuestas indiquen una relación clara entre ambas.

El resultado explicará cuál parece ser la necesidad principal y qué segunda área podría complementar el trabajo.

### Necesidad combinada

Se recomendará una valoración combinada cuando:

- Las tres áreas empaten.
- El usuario seleccione D en dos o más de las cuatro primeras preguntas.
- No exista una diferencia suficiente para identificar una necesidad dominante.

En este caso no se forzará una recomendación artificial. Se indicará que la situación afecta a varias áreas y que conviene realizar una primera valoración conjunta.

### Resultado con poca información

Si las respuestas son muy variadas o no permiten obtener una conclusión clara, el mensaje será:

**«Tus respuestas muestran necesidades en varias áreas. Una primera conversación permitirá ordenar las prioridades y definir por dónde conviene empezar.»**

---

## 9. Posibles resultados

### Resultado: Control de Gestión

**Área principal recomendada: Control de Gestión**

Tus respuestas indican que necesitas conocer mejor los costes, márgenes, rentabilidad o evolución del negocio. Organizar y analizar esta información puede ayudarte a detectar desviaciones y tomar decisiones con mayor fundamento.

Botones:

- **[Ver Control de Gestión]**
- **[Solicitar una valoración]**

### Resultado: Contabilidad y Fiscalidad

**Área principal recomendada: Contabilidad y Fiscalidad**

Tus respuestas muestran que la organización contable, las obligaciones tributarias o la revisión de la situación fiscal requieren atención. Una valoración permitirá comprobar las necesidades concretas y definir el alcance del servicio.

Botones:

- **[Ver Contabilidad y Fiscalidad]**
- **[Solicitar una valoración]**

### Resultado: Digitalización y Automatización

**Área principal recomendada: Digitalización y Automatización**

Tus respuestas indican que las tareas manuales, la duplicidad de información o la falta de conexión entre herramientas están consumiendo tiempo. Revisar los procesos actuales permitirá detectar qué partes pueden digitalizarse o automatizarse.

Botones:

- **[Ver Digitalización y Automatización]**
- **[Solicitar una valoración]**

### Resultado: combinación de áreas

**Recomendación: una solución combinada**

Tus respuestas muestran necesidades relacionadas con más de un área. Antes de aplicar una solución aislada, conviene ordenar las prioridades y valorar cómo se relacionan la gestión, la contabilidad y los procesos internos.

El resultado deberá indicar las dos áreas con mayor puntuación cuando existan. Si las tres tienen un peso similar, se mostrarán las tres sin establecer una prioridad falsa.

Botones:

- **[Conocer las áreas]**
- **[Solicitar una valoración]**

---

## 10. Adaptación según la quinta respuesta

El resultado principal se completará con una frase según el tipo de ayuda seleccionado:

- **Analizar la situación:** «El primer paso sería revisar la situación actual y definir mejoras concretas.»
- **Necesidad puntual:** «La colaboración podría plantearse como una intervención concreta, con un alcance previamente definido.»
- **Implantación y acompañamiento:** «La solución podría incluir la implantación y un acompañamiento adaptado a su funcionamiento.»
- **Todavía no está claro:** «Una primera conversación permitirá concretar la necesidad y decidir por dónde empezar.»

Esta frase no cambiará el área recomendada.

---

## 11. Conexión con el formulario de contacto

El botón **Solicitar una valoración** llevará al formulario de contacto de la Home.

El formulario podrá recibir automáticamente, sin que el usuario tenga que volver a escribirlo:

- Área principal recomendada.
- Área complementaria, si existe.
- Tipo de ayuda indicado en la quinta pregunta.
- Resultado combinado, cuando corresponda.

Ejemplo de información añadida al formulario:

> Resultado del diagnóstico: Digitalización y Automatización.  
> Área complementaria: Control de Gestión.  
> Tipo de ayuda: analizar la situación y definir mejoras concretas.

El usuario deberá poder revisar esta información antes de enviar el formulario.

Completar el diagnóstico no enviará datos por sí solo. Los datos solo se enviarán cuando el usuario rellene y confirme el formulario de contacto.

---

## 12. Requisitos técnicos

El diagnóstico puede desarrollarse con:

- **Astro:** estructura y contenido de la sección.
- **JavaScript:** cambio de preguntas, puntuación y generación del resultado.
- **PHP:** recepción del formulario de contacto.
- **MariaDB/MySQL:** almacenamiento del contacto, si así se configura el formulario.

La lógica del diagnóstico se ejecutará en el navegador. No necesita guardar respuestas en la base de datos ni requiere una cuenta de usuario.

Debe funcionar sin librerías pesadas ni frameworks adicionales. El JavaScript solo se cargará donde se encuentre el diagnóstico para mantener el rendimiento de la web.

---

## 13. Accesibilidad, privacidad y rendimiento

- Las opciones deben ser controles de formulario reales, no elementos visuales que solo respondan al ratón.
- Cada pregunta debe tener un texto asociado correctamente a sus opciones.
- El foco debe desplazarse de forma controlada al cambiar de pregunta o mostrar el resultado.
- El estado seleccionado no dependerá únicamente del color.
- Los botones tendrán textos claros: **Continuar**, **Volver**, **Ver resultado** y **Reiniciar**.
- No se solicitarán datos personales durante el diagnóstico.
- Las respuestas no se enviarán ni almacenarán sin una acción expresa del usuario.
- No se utilizarán cookies para completar el cuestionario.
- El componente deberá añadir el mínimo JavaScript necesario.

---

## 14. Medición opcional

Si más adelante se configura analítica con consentimiento, podrán medirse únicamente eventos generales:

- Inicio del diagnóstico.
- Finalización del diagnóstico.
- Área recomendada.
- Clic en la página del área.
- Clic en solicitar una valoración.

No se deben registrar respuestas personales detalladas sin una necesidad justificada y una configuración de privacidad adecuada.

---

## 15. Aviso orientativo

Texto propuesto:

**Este diagnóstico ofrece una orientación inicial basada en tus respuestas. No sustituye un análisis profesional de la situación concreta de la empresa.**

---

## 16. Decisiones pendientes

- Confirmar la ubicación definitiva dentro de la Home.
- Revisar y aprobar la redacción exacta de las cinco preguntas.
- Revisar y aprobar los textos de cada resultado.
- Confirmar las reglas exactas para mostrar un área secundaria.
- Definir el diseño visual del componente.
- Confirmar qué información del resultado se incorporará al formulario.
- Decidir si se medirá su uso mediante analítica.

---

## 17. Resumen funcional

El Diagnóstico rápido debe:

1. Explicar en una frase para qué sirve.
2. Formular cinco preguntas, una cada vez.
3. Mostrar el progreso.
4. Permitir avanzar, volver y cambiar respuestas.
5. Puntuar las cuatro primeras respuestas.
6. Usar la quinta para adaptar el tipo de ayuda.
7. Recomendar una, dos o las tres áreas sin forzar un resultado.
8. Explicar brevemente por qué se ofrece esa recomendación.
9. Enlazar con la página del servicio correspondiente.
10. Llevar al formulario con el resultado ya contextualizado.
11. No guardar ni enviar información hasta que el usuario confirme el formulario.
12. Permitir reiniciar el diagnóstico.

