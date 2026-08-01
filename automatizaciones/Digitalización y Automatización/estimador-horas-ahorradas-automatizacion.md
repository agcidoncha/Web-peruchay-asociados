# Estimador de horas ahorradas con automatización — Perucha y Asociados

## 1. Descripción general

El **Estimador de horas ahorradas con automatización** será una herramienta interactiva dentro de la página **Digitalización y Automatización** de Perucha y Asociados.

Su función será ayudar a una empresa a responder una pregunta sencilla:

> **¿Cuánto tiempo podría recuperar el equipo si automatizara una tarea manual y repetitiva?**

El estimador ofrecerá una primera referencia de:

- Horas dedicadas actualmente a la tarea.
- Horas que podrían recuperarse cada mes y cada año.
- Tiempo que seguiría necesitando intervención humana.
- Valor económico orientativo del tiempo liberado, cuando el usuario facilite un coste por hora.

El resultado será orientativo. No confirmará que un proceso pueda automatizarse ni que todo el tiempo calculado se convierta en un ahorro económico real. Para determinarlo será necesario revisar el proceso, sus excepciones, las herramientas utilizadas, la calidad de los datos y el resultado esperado.

---

## 2. Por qué encaja en esta página

La herramienta se relaciona directamente con el contenido y las preguntas frecuentes de **Digitalización y Automatización**:

- Existen empresas con tareas manuales, información duplicada y herramientas que no están conectadas.
- Pueden automatizarse tareas repetitivas, administrativas o basadas en reglas.
- El potencial real depende del proceso actual, el tiempo que consume y las herramientas utilizadas.
- Automatizar no significa sustituir al equipo, sino liberar tiempo para actividades de mayor valor.
- No siempre es necesario cambiar los programas existentes.
- La inteligencia artificial solo debe incorporarse cuando aporte una mejora real.
- Digitalizar y automatizar no son lo mismo.

La página menciona como posibles casos:

- Introducción y traslado de datos.
- Generación y envío de documentos.
- Creación periódica de informes.
- Avisos y notificaciones.
- Tratamiento de formularios.
- Organización de archivos.
- Actualización de registros.
- Procesos administrativos con reglas definidas.
- Intercambio de información entre aplicaciones.

El estimador convierte esos problemas en una medida fácil de comprender: **el tiempo que consume hoy el trabajo repetitivo y el que podría liberarse después de automatizar una parte**.

---

## 3. Explicación para cualquier persona

Imagina una tarea que se repite muchas veces:

1. Varias personas realizan la tarea.
2. Cada repetición consume unos minutos.
3. La tarea se repite un número determinado de veces al mes.
4. Una parte podría ejecutarse automáticamente.
5. Otra parte seguiría necesitando supervisión o intervención humana.

El estimador multiplica:

> **personas × repeticiones × tiempo por repetición**

Así calcula el tiempo total que se utiliza actualmente.

Después aplica el porcentaje que el usuario considera automatizable para estimar qué parte de ese tiempo podría recuperarse.

La automatización no siempre elimina el proceso completo. Puede seguir siendo necesario:

- Revisar resultados.
- Resolver excepciones.
- Corregir datos.
- Autorizar acciones.
- Atender casos que no cumplen las reglas habituales.

Por eso el resultado separará el **tiempo potencialmente recuperable** del **tiempo que seguiría siendo manual**.

---

## 4. Objetivos

- Ayudar a detectar cuánto tiempo consume una tarea repetitiva.
- Traducir minutos dispersos en horas mensuales y anuales.
- Mostrar el impacto de automatizar solo una parte del proceso.
- Evitar que el usuario confunda automatización con eliminación total del trabajo humano.
- Mostrar opcionalmente el valor económico del tiempo liberado.
- Explicar que el ahorro real depende de cómo se aproveche ese tiempo.
- Relacionar el resultado con los servicios de digitalización, automatización, integraciones e inteligencia artificial.
- Conseguir contactos con un proceso concreto y unos datos iniciales ya identificados.
- Reforzar la utilidad de una página que ofrece soluciones adaptadas, no paquetes cerrados.

---

## 5. Alcance de la primera versión

La primera versión estimará **una tarea o proceso cada vez**.

Ejemplos:

- Copiar datos de formularios a una hoja de cálculo.
- Trasladar información entre dos aplicaciones.
- Generar y enviar documentos.
- Preparar un informe periódico.
- Clasificar archivos o correos.
- Actualizar registros.
- Enviar avisos.
- Revisar solicitudes con reglas definidas.

El usuario podrá modificar los datos y volver a calcular.

El resultado no:

- Confirmará la viabilidad técnica de la automatización.
- Calculará el presupuesto del proyecto.
- Calculará el plazo de desarrollo.
- Garantizará un porcentaje de ahorro.
- Estimará el retorno de la inversión sin conocer el coste de implantación.
- Sumará varias tareas diferentes en la primera versión, salvo que esta función se apruebe expresamente.
- Enviará o guardará automáticamente los datos.

---

## 6. Ubicación en la web

El estimador formará parte de:

**Digitalización y Automatización** (`/digitalizacion-y-automatizacion`)

La página de diseño ya sitúa la sección:

**Ejemplos de necesidades → Estimador de horas ahorradas → Preguntas frecuentes**

El menú **Simuladores** enlazará directamente a la sección mediante:

`/digitalizacion-y-automatizacion#simulador`

No necesita una página independiente en la primera versión.

---

## 7. Presentación inicial

### Etiqueta

**Estimador de automatización**

### Título

**Descubre cuánto tiempo podría recuperar tu equipo**

### Texto introductorio

Introduce los datos de una tarea manual y repetitiva para obtener una estimación de las horas que podrían liberarse al automatizar una parte del proceso.

### Aviso breve

> El resultado es orientativo. La automatización real depende del proceso, sus excepciones, las herramientas utilizadas y la calidad de los datos.

### Botón

**[Calcular horas ahorradas]**

---

## 8. Funcionamiento de la interfaz

Para no mostrar un formulario demasiado largo, el estimador se organizará en **tres pasos y una pantalla de resultado**.

### Paso 1 de 3 — La tarea

El usuario identificará:

- El tipo de tarea.
- Cuántas personas participan.
- Una descripción breve opcional.

### Paso 2 de 3 — Tiempo y frecuencia

El usuario indicará:

- Cuántas veces se realiza la tarea al mes.
- Cuánto tarda cada persona en completar una repetición.

### Paso 3 de 3 — Potencial de automatización

El usuario indicará:

- Qué porcentaje del trabajo estima que podría automatizarse.
- El coste aproximado de una hora de trabajo, de forma opcional.

### Pantalla de resultado

Mostrará:

- Tiempo manual actual.
- Horas potencialmente recuperables.
- Tiempo que seguiría necesitando intervención humana.
- Proyección anual.
- Valor económico orientativo, si se ha facilitado el coste por hora.
- Explicación de los factores que deben revisarse antes de automatizar.

La interfaz incluirá:

- Indicador `Paso 1 de 3`, `Paso 2 de 3` y `Paso 3 de 3`.
- Barra de progreso.
- Botones **Volver** y **Continuar**.
- Resumen editable antes de calcular.
- Resultado sin recargar la página.
- Botón **Modificar datos**.
- Botón **Analizar este proceso**.

---

## 9. Datos que solicitará

### 9.1. Tipo de tarea

**Pregunta:**

> ¿Qué tarea repetitiva quieres analizar?

Opciones iniciales:

- Introducción o traslado de datos.
- Generación o envío de documentos.
- Preparación de informes.
- Avisos o notificaciones.
- Tratamiento de formularios.
- Organización de archivos.
- Actualización de registros.
- Intercambio de información entre herramientas.
- Otro proceso administrativo.

Este dato servirá para contextualizar el resultado y el formulario de contacto. No modificará por sí solo el cálculo.

### Descripción opcional

El usuario podrá resumir la tarea en un campo breve.

Ejemplo:

> Copiar los pedidos recibidos por correo al programa de gestión.

La descripción no será obligatoria para calcular.

---

### 9.2. Personas implicadas

**Pregunta:**

> ¿Cuántas personas realizan esta tarea?

**Ayuda:**

Incluye únicamente a las personas que dedican tiempo directo a completar o revisar la tarea.

**Campo:**

- Tipo: número entero.
- Unidad: personas.
- Valor mínimo: `1`.
- Sin valor preseleccionado.

---

### 9.3. Frecuencia mensual

**Pregunta:**

> ¿Cuántas veces se realiza esta tarea al mes?

**Ayuda:**

Cuenta cada ocasión en la que el equipo debe ejecutar el proceso completo.

**Campo:**

- Tipo: número entero.
- Unidad: repeticiones al mes.
- Valor mínimo: `1`.
- Sin valor preseleccionado.

### Por qué se utilizará una frecuencia mensual

Pedir directamente las repeticiones mensuales evita suposiciones ocultas sobre:

- Días laborables.
- Semanas trabajadas.
- Meses con distinta actividad.
- Festivos.
- Procesos que no se realizan todos los días.

Si el usuario solo conoce la frecuencia diaria o semanal, la interfaz podrá incluir una ayuda para convertirla, pero deberá mostrar y permitir revisar el número mensual resultante antes de calcular.

---

### 9.4. Tiempo por repetición y por persona

**Pregunta:**

> ¿Cuánto tarda, de media, cada persona en completar una repetición?

**Ayuda:**

Incluye el tiempo de abrir herramientas, buscar información, introducir datos, comprobarlos y finalizar la tarea.

**Campo:**

- Tipo: número decimal.
- Unidad seleccionable: minutos u horas.
- Valor mayor que `0`.
- Sin valor preseleccionado.

Si las personas dedican tiempos diferentes, se utilizará una media aproximada.

La interfaz deberá repetir de forma visible que el tiempo corresponde a **cada persona**, para evitar que el usuario introduzca el tiempo total del equipo y se multiplique dos veces.

---

### 9.5. Porcentaje potencialmente automatizable

**Pregunta:**

> ¿Qué parte de la tarea crees que podría realizarse automáticamente?

Opciones recomendadas:

- **25 % — Una parte pequeña.**
- **50 % — Aproximadamente la mitad.**
- **75 % — La mayor parte.**
- **90 % — Casi todo, con revisión humana.**
- **Personalizado — Introducir otro porcentaje.**

No se mostrará una opción del 100 % como respuesta rápida. Si el usuario introduce manualmente el 100 %, aparecerá una confirmación:

> Has indicado que el proceso podría funcionar sin tiempo de revisión, control ni gestión de excepciones. Confirma este dato únicamente si refleja realmente el proceso.

### Ayuda para elegir

- Si cambian muchos datos o decisiones en cada caso, el porcentaje será menor.
- Si la tarea sigue reglas claras y se repite casi siempre de la misma forma, el porcentaje puede ser mayor.
- Si hace falta aprobar, revisar o resolver excepciones, esa parte seguirá siendo humana.

El porcentaje es una hipótesis del usuario, no una garantía de automatización.

---

### 9.6. Coste aproximado por hora

**Pregunta opcional:**

> ¿Quieres estimar también el valor económico de ese tiempo?

Si responde que sí:

> Indica el coste aproximado de una hora de trabajo.

**Campo:**

- Tipo: número decimal.
- Unidad: euros por hora.
- Valor mínimo: `0`.
- Opcional.
- Sin valor preseleccionado.

**Ayuda:**

Puede utilizarse una estimación del coste laboral total por hora, no únicamente del salario neto.

Si el usuario no conoce el dato, podrá continuar sin introducirlo. El estimador mostrará las horas, pero no inventará un ahorro económico.

---

## 10. Fórmulas del estimador

### Variables

- `P`: número de personas.
- `F`: repeticiones de la tarea al mes.
- `T`: tiempo medio por repetición y por persona, expresado en minutos.
- `A`: porcentaje estimado como automatizable.
- `CH`: coste aproximado por hora, opcional.
- `HM`: horas manuales actuales al mes.
- `HA`: horas potencialmente recuperables al mes.
- `HR`: horas que seguirían necesitando intervención humana al mes.
- `HAA`: horas potencialmente recuperables al año.
- `VE_M`: valor económico orientativo mensual del tiempo liberado.
- `VE_A`: valor económico orientativo anual del tiempo liberado.

### 10.1. Tiempo manual actual

```text
HM = (P × F × T) ÷ 60
```

### 10.2. Horas potencialmente recuperables

```text
HA = HM × (A ÷ 100)
```

### 10.3. Tiempo que seguiría siendo manual

```text
HR = HM − HA
```

### 10.4. Proyección anual

```text
HAA = HA × 12
```

La proyección anual supone que la frecuencia y los tiempos se mantienen durante los doce meses. La interfaz deberá indicarlo.

### 10.5. Valor económico orientativo

Solo se calculará cuando el usuario introduzca un coste por hora:

```text
VE_M = HA × CH
VE_A = HAA × CH
```

Este valor representa la capacidad de trabajo potencialmente liberada. No debe llamarse automáticamente **ahorro de costes**, porque el gasto solo disminuye si la empresa puede reducir costes reales o utilizar ese tiempo de una forma que genere valor.

---

## 11. Ejemplo completo

Una empresa indica:

- Personas implicadas: **3**.
- Frecuencia: **40 veces al mes**.
- Tiempo por repetición y por persona: **12 minutos**.
- Porcentaje potencialmente automatizable: **75 %**.
- Coste aproximado por hora: **22 €**.

### Cálculo del tiempo actual

```text
(3 × 40 × 12) ÷ 60 = 24 horas al mes
```

### Cálculo del tiempo recuperable

```text
24 × 75 % = 18 horas al mes
```

### Tiempo que seguiría siendo manual

```text
24 − 18 = 6 horas al mes
```

### Proyección anual

```text
18 × 12 = 216 horas al año
```

### Valor económico orientativo

```text
18 × 22 € = 396 € al mes
216 × 22 € = 4.752 € al año
```

### Resultado explicado

> Según los datos introducidos, esta tarea consume aproximadamente **24 horas de trabajo al mes**. Si fuera posible automatizar el **75 %**, el equipo podría recuperar alrededor de **18 horas al mes** y seguir dedicando unas **6 horas** a revisiones, excepciones o tareas no automatizadas.
>
> Manteniendo la misma actividad durante doce meses, el tiempo potencialmente recuperable sería de aproximadamente **216 horas al año**.
>
> Con un coste indicado de **22 € por hora**, ese tiempo representa una capacidad de trabajo aproximada de **396 € al mes** o **4.752 € al año**. Esta cifra no equivale necesariamente a una reducción directa del gasto.

---

## 12. Pantalla de resultado

### Título

**El tiempo que podría recuperar tu equipo**

### Resultado principal

**18 horas al mes**

### Proyección anual

**216 horas al año**

### Desglose

- Tiempo manual actual: **24 horas al mes**.
- Parte estimada como automatizable: **75 %**.
- Tiempo potencialmente recuperable: **18 horas al mes**.
- Tiempo que seguiría necesitando intervención humana: **6 horas al mes**.
- Valor económico orientativo: **396 € al mes**, si se introdujo el coste por hora.

### Explicación obligatoria

> Esta estimación parte del porcentaje de automatización que has indicado. Antes de confirmar el ahorro real habría que revisar las reglas del proceso, sus excepciones, las herramientas actuales, la calidad de los datos y el tiempo de supervisión necesario.

### Nota económica, cuando corresponda

> El valor económico representa tiempo de trabajo potencialmente liberado. No significa necesariamente que la empresa vaya a reducir sus gastos en esa cantidad.

### Botones

- **[Modificar datos]**
- **[Analizar este proceso]**

---

## 13. Interpretación del resultado

El estimador no emitirá automáticamente mensajes como:

- «Este proceso debe automatizarse».
- «Ahorrarás exactamente esta cantidad».
- «La automatización sustituirá a estas personas».
- «La inversión será rentable».

El resultado se presentará como una hipótesis inicial.

Podrá utilizar una de estas orientaciones:

### Potencial de tiempo reducido

> El tiempo estimado es limitado. Antes de desarrollar una automatización a medida, conviene comprobar si puede resolverse mejorando el proceso o aprovechando funciones de las herramientas actuales.

### Potencial de tiempo relevante

> El proceso podría liberar una cantidad relevante de tiempo. Una revisión permitirá comprobar qué parte puede automatizarse de forma segura y proporcionada.

### Potencial elevado, sujeto a revisión

> El tiempo indicado justifica estudiar el proceso con más detalle. Será importante validar el volumen real, las excepciones y los controles necesarios antes de estimar el ahorro definitivo.

Los umbrales exactos que separan estas orientaciones deberán aprobarse antes de implementarse. Hasta entonces, el resultado principal puede mostrarse sin clasificar el potencial como bajo, medio o alto.

---

## 14. Validaciones y mensajes de error

### Campos obligatorios vacíos

> Completa los datos de personas, frecuencia, tiempo y porcentaje para realizar la estimación.

### Personas igual a cero

> Indica al menos una persona implicada en la tarea.

### Personas con decimales

> El número de personas debe ser un número entero.

### Frecuencia igual a cero

> Si la tarea no se realiza actualmente, no existen horas mensuales que estimar.

### Tiempo igual a cero

> Indica cuánto tarda actualmente cada persona en completar la tarea.

### Valores negativos

> Las cantidades no pueden ser negativas.

### Porcentaje fuera de rango

> El porcentaje automatizable debe estar entre 0 % y 100 %.

### Coste por hora vacío

Si el usuario decide no introducirlo, el cálculo seguirá funcionando y no mostrará resultados económicos.

### Datos aparentemente incoherentes

La herramienta podrá pedir confirmación, sin bloquear automáticamente el cálculo, cuando el resultado implique un volumen de trabajo muy elevado.

Ejemplo:

> Los datos introducidos equivalen a más horas de trabajo de las disponibles para el equipo durante el mes. Comprueba si el tiempo indicado corresponde a cada persona o al total del equipo.

### Separadores numéricos

- Se aceptarán coma y punto como separadores decimales.
- Los valores se normalizarán antes del cálculo.
- Los resultados seguirán el formato habitual en España.

---

## 15. Casos especiales

### Varias personas con tiempos diferentes

El usuario utilizará un tiempo medio por persona. Si las diferencias son muy grandes, conviene analizar cada función por separado.

### Frecuencia irregular

Se utilizará una media mensual basada en un periodo representativo. Si existe una estacionalidad importante, el resultado deberá considerarse con más cautela.

### Varias tareas dentro de un mismo proceso

En la primera versión se recomienda calcular cada tarea por separado. Sumarlas como si fueran una sola puede ocultar diferencias en frecuencia, tiempo y porcentaje automatizable.

### Automatización parcial

El tiempo recuperable se calculará únicamente sobre la parte indicada como automatizable. El resto se mostrará como tiempo manual.

### Revisión humana

Si una automatización genera documentos, modifica registros, clasifica información o utiliza inteligencia artificial, puede ser necesario mantener controles y revisiones humanas.

### Herramientas existentes

El resultado no implicará que sea necesario sustituir los programas actuales. La primera revisión deberá comprobar si pueden aprovecharse o conectarse.

### Errores evitados

El estimador no calculará económicamente:

- Errores que podrían evitarse.
- Retrabajos.
- Sanciones.
- Oportunidades perdidas.
- Mejora en la experiencia de clientes o empleados.

Estos beneficios podrán explicarse cualitativamente, pero no se convertirán en euros sin datos específicos.

---

## 16. Diseño visual

La herramienta seguirá el look & feel de la página **Digitalización y Automatización**:

- Fondo general casi blanco: `#faf9fe`.
- Superficie lavanda clara: `#f4f2fa`.
- Tarjetas blancas.
- Texto principal: `#1f2937`.
- Morado oscuro principal: `#2a2636`.
- Morado medio de apoyo: `#70698a`.
- Bordes suaves y radios amplios.
- Tipografía y botones coherentes con el resto de la página.

### Escritorio

- Contenedor máximo aproximado de `900 px`, siguiendo la sección ya diseñada.
- Una pregunta o bloque principal por paso.
- Resultado organizado en tarjetas claras.
- El valor principal de horas tendrá la mayor jerarquía visual.

### Móvil

- Una sola columna.
- Botones suficientemente grandes.
- Unidades visibles junto a cada campo.
- Resultado completo sin desplazamiento horizontal.

### Criterios visuales

- No utilizar imágenes decorativas dentro del estimador.
- No representar la automatización como sustitución de personas.
- No depender únicamente del color para explicar el resultado.
- No utilizar gráficos complejos en la primera versión.
- Mantener el diseño limpio y coherente con los simuladores anteriores.

---

## 17. Conexión con el formulario de contacto

El botón **Analizar este proceso** llevará al formulario de contacto de la Home.

Con autorización del usuario, el formulario podrá incorporar:

- Tipo de tarea.
- Descripción opcional.
- Número de personas.
- Frecuencia mensual.
- Tiempo por repetición.
- Porcentaje estimado como automatizable.
- Horas manuales actuales.
- Horas potencialmente recuperables.
- Coste por hora y valor económico, si se introdujeron.

El usuario deberá poder revisar esa información antes de enviarla.

Realizar la estimación no enviará datos por sí solo. La información únicamente se compartirá cuando el usuario complete y confirme el formulario.

Texto sugerido para el campo de mensaje:

> He utilizado el estimador de automatización para analizar una tarea de preparación de informes. Según los datos introducidos, consume aproximadamente 24 horas al mes y podría liberar unas 18 horas mensuales. Me gustaría revisar si el proceso puede automatizarse.

---

## 18. Requisitos técnicos para Astro

La herramienta podrá desarrollarse con:

- **Astro** para la estructura y el contenido.
- **HTML semántico** para el formulario, los pasos y el resultado.
- **JavaScript o TypeScript** para gestionar el estado, validar y calcular.
- **CSS** para la presentación y los estados visuales.

No necesita una base de datos para realizar la estimación.

Los cálculos se ejecutarán en el navegador.

No se utilizarán librerías externas si JavaScript nativo puede resolver la función, para mantener la página ligera.

### Estado mínimo

```text
tipoTarea
descripcion
personas
frecuenciaMensual
tiempoPorPersona
unidadTiempo
porcentajeAutomatizable
mostrarCalculoEconomico
costeHora
pasoActual
```

### Normalización del tiempo

Si el usuario introduce horas:

```text
tiempoMinutos = horas × 60
```

Si introduce minutos:

```text
tiempoMinutos = minutos
```

### Pseudocódigo

```text
horasActualesMes =
  (personas × frecuenciaMensual × tiempoMinutos) ÷ 60

horasRecuperablesMes =
  horasActualesMes × (porcentajeAutomatizable ÷ 100)

horasManualesRestantesMes =
  horasActualesMes − horasRecuperablesMes

horasRecuperablesAnio =
  horasRecuperablesMes × 12

si existe costeHora:
  valorMensual = horasRecuperablesMes × costeHora
  valorAnual = horasRecuperablesAnio × costeHora
```

### Precisión y presentación

- Los cálculos conservarán precisión decimal internamente.
- Las horas se mostrarán con un máximo de un decimal cuando sea necesario.
- No se redondearán las variables antes de completar el cálculo.
- Los importes se mostrarán con dos decimales cuando sea necesario.
- Miles con punto y decimales con coma.

---

## 19. Accesibilidad

- Cada campo tendrá una etiqueta visible.
- Las ayudas estarán asociadas a su campo.
- Los grupos de opciones utilizarán `fieldset` y `legend`.
- Los errores identificarán el dato que debe corregirse.
- El progreso se comunicará también mediante texto.
- La navegación funcionará completamente con teclado.
- El foco avanzará de forma controlada al título de cada paso.
- Al calcular, el foco se trasladará al resultado.
- El resultado se anunciará mediante una región adecuada para lectores de pantalla.
- No se dependerá solo del color, de iconos o de una gráfica.
- Los botones **Volver**, **Continuar** y **Calcular** tendrán textos inequívocos.
- El usuario podrá revisar y modificar sus respuestas.

---

## 20. Privacidad

- El estimador funcionará sin pedir nombre, correo o teléfono.
- Los datos se mantendrán únicamente durante la interacción en el navegador.
- No se guardarán automáticamente.
- No se enviarán al servidor al pulsar **Calcular**.
- La descripción opcional del proceso no se compartirá sin acción expresa del usuario.
- Solo se enviarán datos cuando el usuario decida contactar y confirme el formulario.
- La analítica no registrará descripciones, costes, tiempos ni cantidades introducidas.

---

## 21. SEO

La sección incluirá contenido visible y presente en el HTML generado por Astro que explique:

- Qué tareas repetitivas pueden automatizarse.
- Cómo calcular el tiempo dedicado a un proceso manual.
- Qué significa el porcentaje automatizable.
- Por qué una parte del proceso puede seguir necesitando intervención humana.
- La diferencia entre horas liberadas y ahorro económico.
- Por qué hace falta analizar las herramientas y excepciones antes de automatizar.

La explicación principal no dependerá de JavaScript.

Posible encabezado SEO:

**Calculadora de horas ahorradas con automatización**

No se creará una URL independiente en la primera versión. El contenido reforzará la página **Digitalización y Automatización** sin competir con ella.

---

## 22. Medición

Podrán medirse eventos generales:

- Inicio del estimador.
- Finalización de cada paso.
- Cálculo completado.
- Uso o no del cálculo económico.
- Modificación de datos.
- Clic en **Analizar este proceso**.

No se enviarán a la analítica:

- Descripción del proceso.
- Número de personas.
- Frecuencia.
- Tiempo.
- Porcentaje.
- Coste por hora.
- Resultado económico.

---

## 23. Pruebas obligatorias

### Prueba principal

1. `P = 3`, `F = 40`, `T = 12 minutos`, `A = 75 %`, `CH = 22 €`.
2. Resultado esperado:
   - `HM = 24 horas/mes`.
   - `HA = 18 horas/mes`.
   - `HR = 6 horas/mes`.
   - `HAA = 216 horas/año`.
   - `VE_M = 396 €/mes`.
   - `VE_A = 4.752 €/año`.

### Otras pruebas de cálculo

1. Una persona, una repetición y 60 minutos → 1 hora actual.
2. Porcentaje del 0 % → 0 horas recuperables.
3. Porcentaje del 50 % → mitad del tiempo actual.
4. Porcentaje del 100 % → 0 horas manuales restantes, después de confirmación.
5. Cálculo sin coste por hora → resultado de tiempo sin importes económicos.
6. Tiempo introducido en horas y su equivalente en minutos → mismo resultado.
7. Valores decimales.
8. Resultado inferior a una hora.
9. Volumen mensual elevado que active el aviso de coherencia.

### Pruebas de validación

1. Campos obligatorios vacíos.
2. Cero personas.
3. Personas con decimales.
4. Frecuencia igual a cero.
5. Tiempo igual a cero.
6. Valores negativos.
7. Porcentaje inferior a 0 %.
8. Porcentaje superior a 100 %.
9. Coma y punto como separadores decimales.
10. Cantidades con separadores de miles.

### Pruebas de interfaz

1. Recorrer todos los pasos con teclado.
2. Volver y modificar una respuesta.
3. Mantener los datos al volver.
4. Anunciar correctamente errores y resultado.
5. Comprobar el orden del foco.
6. Verificar la presentación en móvil.
7. Verificar que el cálculo no recarga la página.
8. Verificar que no se envían datos al calcular.
9. Comprobar el enlace desde el menú Simuladores.
10. Comprobar el enlace al formulario.

---

## 24. Decisiones ya definidas por la página y el esquema

1. El nombre de la herramienta será **Estimador de horas ahorradas con automatización**.
2. Estará dentro de **Digitalización y Automatización**.
3. Se situará antes de las preguntas frecuentes.
4. El menú Simuladores enlazará al ancla `#simulador`.
5. Utilizará personas implicadas, tiempo, frecuencia y porcentaje automatizable.
6. Mostrará horas y un valor económico orientativo cuando exista información suficiente.
7. El resultado no será exacto ni definitivo.
8. Terminará con una llamada a contacto.
9. Mantendrá el look & feel lavanda de la página.
10. Antes de proponer una sustitución, se valorará si pueden aprovecharse las herramientas actuales.

---

## 25. Decisiones pendientes antes del desarrollo

1. Confirmar si se aprueba el flujo de **tres pasos y resultado**.
2. Confirmar si la primera versión analizará una sola tarea o permitirá añadir varias.
3. Confirmar las opciones definitivas del selector de tipo de tarea.
4. Confirmar si la frecuencia se pedirá directamente como **repeticiones al mes**.
5. Confirmar si el tiempo se introducirá en minutos, en horas o mediante un selector de unidad.
6. Confirmar las opciones rápidas del porcentaje automatizable: 25 %, 50 %, 75 % y 90 %.
7. Confirmar si se permitirá introducir manualmente el 100 % con una advertencia.
8. Confirmar si el coste por hora será opcional.
9. Definir si se mostrarán orientaciones de potencial reducido, relevante o elevado y, en ese caso, aprobar sus umbrales.
10. Confirmar qué datos podrán trasladarse al formulario de contacto.
11. Confirmar los textos finales de los botones.
12. Confirmar si se mantendrá el ancla general `#simulador` o se utilizará una más descriptiva como `#horas-ahorradas`.

Estas decisiones deben revisarse una a una antes de programar. Hasta entonces, se consideran propuestas funcionales y no decisiones definitivas.

---

## 26. Fuentes del proyecto

- Página de diseño **Digitalización y Automatización**:  
  `https://peruchayasociados.com/dev/Digitalizacion%20y%20Automatizacion.dc.html`
- `esquema-web-PyA.md`.
- `faqs-pya(1).md`, bloques **Digitalización Empresarial** y **Automatización e Inteligencia Artificial**.
- Sistema funcional y criterios comunes de los documentos:
  - `diagnostico-rapido.md`.
  - `calculadora-punto-de-equilibrio.md`.
  - `simulador-autonomo-vs-sociedad.md`.

---

## 27. Decisión recomendada

La herramienta no debe presentarse como una promesa de ahorro ni como una calculadora que decide automáticamente si un proceso debe automatizarse.

Debe presentarse como:

> **Una primera estimación del tiempo que consume una tarea repetitiva y de la parte que podría recuperarse si el proceso resulta técnicamente automatizable.**

El dato más importante será el tiempo liberado. El valor económico será opcional y se explicará como **capacidad de trabajo potencialmente recuperada**, no como reducción garantizada de costes.

Así el estimador encaja con el mensaje central de la página:

> **No digitalizamos ni automatizamos por moda. Primero se valora si la solución aportará una mejora real.**
