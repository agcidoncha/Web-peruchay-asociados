# Simulador Autónomo vs. Sociedad — Perucha y Asociados

## 1. Descripción general

El **Simulador Autónomo vs. Sociedad** será una herramienta interactiva dentro de la página **Contabilidad y Fiscalidad** de Perucha y Asociados.

Su función será ayudar a una persona que desarrolla una actividad económica a entender una pregunta habitual:

> **¿Me puede interesar seguir como autónomo o estudiar la creación de una sociedad?**

El simulador ofrecerá una **comparación orientativa**, no una recomendación fiscal definitiva. La decisión real depende de muchos factores personales, fiscales, mercantiles y laborales que no pueden resolverse únicamente con una calculadora.

La herramienta debe estar planteada como una primera orientación que termine invitando al usuario a solicitar una revisión profesional.

---

## 2. Por qué encaja en esta página

El simulador se relaciona directamente con el contenido y las preguntas frecuentes de **Contabilidad y Fiscalidad**:

- La forma jurídica influye en las obligaciones contables y fiscales.
- Un autónomo tributa principalmente mediante el IRPF.
- Una sociedad tributa por el Impuesto sobre Sociedades, pero el dinero que recibe la persona también puede tributar.
- La optimización fiscal debe realizarse siempre dentro de la legalidad.
- Los impuestos dependen de la actividad, la forma jurídica y el régimen aplicable.
- La situación actual puede revisarse para detectar mejoras.

La herramienta permite demostrar de manera sencilla qué hace el área de Contabilidad y Fiscalidad: analizar una situación concreta, ordenar los datos y estudiar las alternativas legales disponibles.

---

## 3. Explicación para niños

Imagina que una persona gana dinero con su trabajo.

### Si trabaja como autónomo

El dinero que gana con la actividad pertenece directamente a esa persona. Después de restar los gastos permitidos, paga sus impuestos y su cotización.

### Si trabaja mediante una sociedad

El dinero pertenece primero a la empresa. La empresa paga sus gastos y sus impuestos. Si la persona quiere utilizar ese dinero para vivir, tendrá que recibirlo correctamente, por ejemplo mediante una retribución o mediante dividendos, y esa persona también puede tener que pagar impuestos.

Por eso no basta con decir:

> «La sociedad paga un porcentaje menor que el autónomo».

También hay que saber:

- Cuánto dinero gana realmente el negocio.
- Cuánto dinero necesita la persona para vivir.
- Cuánto dinero quedará dentro de la sociedad.
- Qué cotizaciones corresponden.
- Cuánto cuesta mantener la sociedad.
- Qué circunstancias personales tiene el usuario.

Una sociedad puede resultar interesante en algunos casos, pero no siempre. Si la persona necesita sacar todo el dinero, tiene pocos beneficios o la sociedad añade demasiados costes, podría no compensar.

---

## 4. Objetivos

- Explicar de forma sencilla las diferencias económicas básicas entre ambas opciones.
- Evitar la idea incorrecta de que una sociedad siempre paga menos impuestos.
- Comparar impuestos, cotizaciones y costes de gestión de forma orientativa.
- Diferenciar el dinero disponible para la persona del dinero que permanece en la sociedad.
- Mostrar qué factores pueden hacer que una opción resulte más interesante.
- Relacionar el resultado con los servicios de Contabilidad y Fiscalidad.
- Conseguir contactos mejor informados para realizar una revisión profesional.
- Reforzar el posicionamiento de la página para búsquedas relacionadas con «autónomo o sociedad».

---

## 5. Estrategia aprobada: dos versiones

El proyecto tendrá **dos versiones del mismo simulador**:

### 5.1. Versión completa

Será la primera que se diseñará y desarrollará. Pedirá los datos necesarios para ofrecer una estimación más personalizada:

- Comunidad autónoma o territorio fiscal.
- Beneficio de la actividad.
- Otros ingresos personales.
- Estado civil.
- Hijos y sus edades.
- Hijos con discapacidad.
- Discapacidad del usuario.
- Ascendientes a cargo.
- Tipo de declaración: individual o conjunta, cuando proceda.
- Dinero que necesita retirar de la sociedad.
- Forma prevista de retirar el dinero.
- Costes adicionales de la sociedad.
- Situación de la sociedad de nueva creación.

Esta versión utilizará la configuración fiscal correspondiente a cada territorio y mostrará una estimación detallada, siempre sujeta a revisión profesional.

### 5.2. Orden de desarrollo

1. Crear y validar el motor de cálculo.
2. Desarrollar la interfaz.
3. Comprobar sus resultados mediante casos de prueba objetivos y herramientas oficiales.

---

## 6. Alcance funcional

El simulador comparará únicamente estos dos casos:

1. **Empresario individual o profesional autónomo en estimación directa.**
2. **Sociedad limitada unipersonal**, en la que la misma persona es propietaria, trabaja en la actividad y ejerce el control efectivo.

Este alcance evita mezclar situaciones que necesitan reglas diferentes.

El simulador no será adecuado para:

- Actividades en estimación objetiva o módulos.
- Sociedades con varios socios y diferentes porcentajes de participación.
- Sociedades patrimoniales.
- Cooperativas, comunidades de bienes o sociedades civiles.
- Grupos de empresas.
- Regímenes fiscales especiales.
- Personas no residentes fiscales en España.
- Casos con operaciones vinculadas complejas.
- Situaciones en las que no pueda determinarse correctamente el régimen de Seguridad Social.

El simulador servirá para residentes fiscales de **toda España**. Esto incluye la obligación de configurar y mantener actualizadas las reglas autonómicas y, cuando corresponda, las reglas de los territorios forales. Si un territorio todavía no tiene una configuración fiscal disponible para el ejercicio vigente, la herramienta no deberá utilizar datos de otra comunidad ni inventar un resultado.

Cuando el caso quede fuera del alcance o su configuración territorial no esté disponible, la herramienta mostrará:

> Tu situación necesita una revisión más específica y no puede compararse correctamente con este simulador sencillo.

Botón:

**[Solicitar una valoración]**

---

## 7. Ubicación en la web

El simulador formará parte de:

**Contabilidad y Fiscalidad** (`/contabilidad-y-fiscalidad`)

Se recomienda situarlo después de la explicación de los servicios y antes de las preguntas frecuentes, igual que la calculadora de punto de equilibrio en la página de Finanzas y Control.

El orden exacto deberá comprobarse con el diseño definitivo de la página antes de desarrollarlo.

El menú **Simuladores** enlazará directamente a:

`/contabilidad-y-fiscalidad#autonomo-vs-sociedad`

---

## 8. Presentación inicial

### Título

**¿Autónomo o sociedad? Compara ambos escenarios**

### Texto introductorio

Introduce algunos datos básicos y obtén una comparación orientativa de los impuestos, cotizaciones y costes que podrían intervenir en cada opción.

### Aviso visible

> Esta herramienta ofrece una estimación simplificada. No constituye asesoramiento fiscal, contable, laboral o mercantil y no sustituye el estudio de tu situación personal.

### Botón

**[Comenzar comparación]**

---

## 9. Funcionamiento de la interfaz

### 9.1. Flujo de la interfaz

Para no mostrar un formulario largo y complicado, la información se solicitará en **cuatro pasos**.

### Paso 1 — Tu actividad

Datos básicos del negocio.

### Paso 2 — Tu situación personal

Datos necesarios para aproximar el IRPF y saber cuánto dinero necesita la persona.

### Paso 3 — El escenario de sociedad

Dinero que se retiraría, dinero que se mantendría en la empresa y costes adicionales.

### Paso 4 — Resultado

Comparación, explicación y recomendación orientativa.

La interfaz mostrará:

- `Paso 1 de 4`, `Paso 2 de 4`, etc.
- Barra de progreso.
- Botones **Volver** y **Continuar**.
- Resumen editable antes de calcular.
- Resultado sin recargar la página.
- Botón para modificar los datos.

---

## 10. Datos que solicitará

Todos los importes económicos serán **anuales y sin IVA**.

### 10.1. Año del cálculo

La herramienta mostrará el ejercicio fiscal utilizado:

> Cálculo orientativo basado en la normativa y los valores configurados para **[AÑO]**.

El usuario no podrá seleccionar un año cuya configuración fiscal no haya sido actualizada y publicada.

### 10.2. Comunidad autónoma o territorio de residencia fiscal

**Pregunta:**

> ¿En qué comunidad autónoma o territorio resides fiscalmente?

Este dato es necesario porque una parte del IRPF cambia según la comunidad autónoma y los territorios forales tienen normativa propia.

#### Decisión aprobada

El simulador servirá para residentes fiscales de **toda España**.

Cada escala autonómica y cada configuración territorial necesaria deberá estar actualizada por ejercicio. Nunca se utilizará la escala de Madrid ni la de otra comunidad como sustitución.

### 10.3. Ingresos anuales de la actividad

**Pregunta:**

> ¿Cuánto factura aproximadamente tu actividad al año?

**Ayuda sencilla:**

Es todo lo que cobra el negocio durante el año, antes de restar gastos y sin incluir IVA.

**Campo:**

- Número decimal.
- Unidad: euros al año.
- Sin IVA.

### 10.4. Gastos deducibles anuales

**Pregunta:**

> ¿Cuánto pagas al año en gastos relacionados con la actividad?

**Ayuda sencilla:**

Incluye únicamente gastos necesarios para la actividad y fiscalmente deducibles, como alquiler, suministros profesionales, programas, seguros, materiales o servicios externos.

No incluir en este campo:

- IVA deducible.
- Cuota de autónomos.
- IRPF.
- Gastos personales.
- La retribución del propio usuario en el escenario de sociedad.
- Los costes adicionales de mantener la sociedad, que se preguntarán después.

### 10.5. Otros ingresos personales

**Pregunta:**

> Además de esta actividad, ¿recibes otros ingresos que tributan en el IRPF?

Opciones:

- No.
- Sí.

Si responde sí:

> Indica el importe bruto anual aproximado.

**Ayuda sencilla:**

Por ejemplo, un salario de otro trabajo, determinados alquileres u otros rendimientos que afecten al cálculo.

El simulador deberá advertir que no todos los ingresos tributan de la misma forma. Si existen rentas complejas, el resultado será menos preciso.

### 10.6. Situación personal y familiar

El simulador contemplará:

- Edad.
- Estado civil y situación familiar relevante para el cálculo.
- Número de hijos y sus edades.
- Hijos con discapacidad y grado reconocido cuando sea necesario.
- Discapacidad reconocida del usuario y grado cuando sea necesario.
- Ascendientes a cargo y datos imprescindibles para comprobar si generan derecho a mínimo.
- Declaración individual o conjunta, cuando proceda.

Solo se pedirán datos que tengan una función concreta dentro del cálculo. Cada campo explicará de forma sencilla por qué se solicita.

### 10.7. Dinero que necesita para uso personal

**Pregunta:**

> Si trabajaras mediante una sociedad, ¿cuánto dinero bruto necesitarías retirar cada año para tus gastos personales?

**Ayuda sencilla:**

La sociedad y la persona no tienen el mismo bolsillo. El dinero que permanezca dentro de la sociedad no estará disponible para pagar los gastos personales.

Este dato es esencial. No se debe comparar una opción en la que el autónomo utiliza todo el beneficio con otra en la que la sociedad conserva parte del dinero sin explicarlo.

### 10.8. Forma prevista de retirar el dinero

Opciones:

- Retribución por el trabajo realizado.
- Dividendos.
- Combinación de retribución y dividendos.

La herramienta nunca decidirá silenciosamente cómo retirar el dinero.

### 10.9. Beneficio que permanecería en la sociedad

El sistema lo calculará a partir de:

- Ingresos.
- Gastos de la actividad.
- Retribución prevista.
- Cotizaciones aplicables.
- Costes adicionales de la sociedad.
- Impuesto sobre Sociedades.
- Dividendos que se decidan distribuir.

El resultado lo mostrará por separado:

> Dinero estimado que permanecería dentro de la sociedad: **X €**

### 10.10. Costes adicionales de mantener una sociedad

**Pregunta:**

> ¿Qué costes adicionales tendría la sociedad cada año?

**Ayuda sencilla:**

Una sociedad suele necesitar más trabajo contable, cuentas anuales, libros, trámites mercantiles, certificados, nóminas u otros servicios.

El usuario podrá introducir una cifra estimada.

No se utilizará una cifra oculta o inventada. Si se ofrece un valor orientativo predefinido, deberá aparecer claramente y poder modificarse.

### 10.11. Comprobación guiada del tipo reducido para entidades de nueva creación

La pregunta simple **«¿Sería una sociedad nueva? Sí/No»** se sustituirá por una comprobación guiada. Crear una sociedad nueva no basta por sí solo para aplicar el tipo reducido.

La comprobación preguntará:

1. ¿La sociedad todavía no existe o acaba de constituirse?
2. ¿Realizará una actividad económica real?
3. ¿La actividad procede de otra empresa vinculada?
4. ¿Has realizado personalmente esta misma actividad durante el último año?
5. ¿Tendrías más del 50 % de la sociedad?
6. ¿La sociedad se dedicará principalmente a gestionar patrimonio?
7. ¿Formará parte de un grupo empresarial?

Según las respuestas, mostrará uno de estos tres resultados:

1. **Podría aplicar el 15 %.**
2. **No parece cumplir los requisitos.**
3. **La aplicación del tipo reducido necesita revisión profesional.**

Cuando se cumplan claramente los requisitos configurados, se aplicará el 15 % en el primer ejercicio con base imponible positiva y en el siguiente. Si no se cumplen, se aplicará el tipo correspondiente. Si las respuestas no permiten determinarlo con prudencia, no se confirmará automáticamente el tipo reducido.

Las empresas emergentes certificadas tienen un régimen específico y no se tratarán como una sociedad nueva ordinaria.

---

## 11. Datos que no se solicitarán

Para mantener una experiencia comprensible, ninguna de las dos versiones intentará calcular:

- IVA.
- Pagos fraccionados y retenciones como si fueran un coste adicional definitivo.
- Deducciones fiscales especiales.
- Bonificaciones de Seguridad Social.
- Compensación de pérdidas de ejercicios anteriores.
- Reserva de capitalización.
- Planes de pensiones y otras reducciones personales.
- Gastos con deducibilidad limitada.
- Operaciones vinculadas.
- Patrimonio y sucesiones.
- Costes de financiación.
- Valoración de responsabilidad jurídica.
- Efectos de contratar trabajadores.

Estos elementos pueden cambiar mucho el resultado real y deberán indicarse entre las limitaciones.

---

## 12. Lógica general del cálculo

El motor realizará dos cálculos separados utilizando los mismos datos económicos.

## 12.1. Escenario A — Autónomo

### Paso A1. Beneficio previo

`Beneficio previo = Ingresos − Gastos deducibles`

### Paso A2. Cotización estimada

La cotización se calculará utilizando la tabla oficial del año seleccionado y las reglas aplicables a los rendimientos netos.

No se utilizará una cuota fija universal.

### Paso A3. Rendimiento neto orientativo

`Rendimiento neto orientativo = Beneficio previo − Cotización deducible − ajustes configurados`

### Paso A4. IRPF estimado

El IRPF se calculará de forma progresiva aplicando:

- Escala estatal.
- Escala autonómica correspondiente.
- Mínimos personales y familiares implementados.
- Otros ingresos personales incluidos.
- Ajustes expresamente configurados.

No se aplicará un porcentaje único a todo el beneficio.

### Paso A5. Dinero personal disponible

`Disponible autónomo = Ingresos − Gastos − Cotización − IRPF estimado`

El resultado deberá separar claramente:

- Beneficio antes de impuestos.
- Cotización.
- IRPF estimado.
- Dinero personal disponible.

---

## 12.2. Escenario B — Sociedad limitada unipersonal

### Paso B1. Resultado previo de la sociedad

`Resultado previo = Ingresos − Gastos de la actividad − Costes adicionales de la sociedad`

### Paso B2. Retribución de la persona

Se restará la retribución bruta seleccionada únicamente cuando el escenario configurado permita tratarla como gasto deducible y cumpla los requisitos legales y documentales establecidos.

La aplicación deberá mostrar el supuesto utilizado.

### Paso B3. Cotización de la persona

La cotización se estimará según el régimen que corresponda al socio o administrador con control efectivo.

No se supondrá que crear una sociedad elimina la cuota de autónomos.

### Paso B4. Base imponible orientativa de la sociedad

`Base orientativa = Resultado previo − Retribuciones y gastos deducibles configurados ± ajustes`

### Paso B5. Impuesto sobre Sociedades

La base se dividirá en los tramos que correspondan al ejercicio y al tipo de entidad configurado.

No se utilizará siempre el 25 %, porque pueden existir tipos diferentes para:

- Tipo general.
- Microempresas.
- Entidades de reducida dimensión.
- Entidades de nueva creación que cumplan los requisitos.

### Paso B6. Beneficio después del impuesto

`Beneficio después de Sociedades = Base orientativa − Impuesto sobre Sociedades`

### Paso B7. Dividendos

Si se reparten dividendos:

1. Se restarán del beneficio disponible después del Impuesto sobre Sociedades.
2. Se integrarán en la base del ahorro de la persona.
3. Se calculará el IRPF del ahorro según los tramos del ejercicio.

No se presentarán los dividendos como dinero libre de impuestos.

### Paso B8. IRPF personal

La retribución y los demás ingresos personales se incorporarán al cálculo del IRPF según su naturaleza.

### Paso B9. Resultado de la sociedad

Se mostrarán dos cifras distintas:

1. **Dinero personal disponible:** lo que la persona puede utilizar después de sus impuestos y cotizaciones.
2. **Dinero que permanece en la sociedad:** pertenece a la sociedad y no puede tratarse como dinero personal.

---

## 13. Regla esencial de comparación

La herramienta nunca sumará el dinero personal y el dinero retenido en la sociedad como si fueran exactamente lo mismo.

El resultado deberá comparar:

| Concepto | Autónomo | Sociedad |
| --- | ---: | ---: |
| Beneficio antes de impuestos | X € | X € |
| Cotizaciones estimadas | X € | X € |
| IRPF personal estimado | X € | X € |
| Impuesto sobre Sociedades | No aplica | X € |
| Costes adicionales de estructura | 0 € o importe indicado | X € |
| Dinero personal disponible | X € | X € |
| Dinero que permanece en la empresa | No aplica | X € |
| Carga total estimada | X € | X € |

La cifra más importante será **dinero personal disponible**.

El dinero retenido en la sociedad se mostrará aparte con este aviso:

> Este dinero pertenece a la sociedad. Si se retira posteriormente, puede generar nueva tributación.

---

## 14. Tipo de resultado

El simulador no dará una orden. Utilizará uno de estos tres resultados:

### Resultado 1 — Conviene estudiar continuar como autónomo

Se utilizará cuando, con los supuestos introducidos:

- La sociedad no produzca una mejora económica relevante.
- Los costes adicionales absorban el posible ahorro.
- La persona necesite retirar prácticamente todo el beneficio.
- La diferencia quede dentro del margen de incertidumbre del cálculo.

**Texto orientativo:**

> Con los datos introducidos, crear una sociedad no muestra una ventaja económica clara. Continuar como autónomo podría ser la opción más sencilla, aunque conviene revisar tu situación completa antes de decidir.

### Resultado 2 — Conviene estudiar una sociedad

Se utilizará cuando:

- Exista beneficio suficiente.
- Parte del beneficio pueda permanecer en la empresa.
- La diferencia estimada supere el margen mínimo configurado.
- Los costes adicionales ya se hayan incluido.

**Texto orientativo:**

> Con los datos introducidos, una sociedad merece un estudio más detallado. La diferencia depende especialmente del dinero que necesites retirar y del que pueda permanecer en la empresa.

### Resultado 3 — No existe una diferencia clara

Se utilizará cuando:

- La diferencia sea pequeña.
- Falten datos importantes.
- Los dos escenarios queden dentro del margen de incertidumbre.
- La situación se encuentre cerca del punto de cambio.

**Texto orientativo:**

> Los dos escenarios ofrecen resultados próximos. En este caso, la decisión no debería basarse solo en los impuestos: también hay que valorar costes de gestión, responsabilidad, previsión de crecimiento y necesidades personales.

---

## 15. Margen de prudencia

No se considerará que una opción «gana» por una diferencia mínima.

Se aplicará esta regla:

- Si la diferencia es **inferior al 5 %**, el resultado será: **«No existe una ventaja económica clara»**.
- Si la diferencia es **igual o superior al 5 %**, se destacará la opción con mejor resultado económico.
- Aunque destaque la sociedad, también se explicarán sus mayores costes, obligaciones y complejidad.
- El resultado explicará siempre por qué una opción aparece como más favorable.

El margen del 5 % quedará guardado en la configuración fiscal y podrá ajustarse después si las pruebas objetivas demuestran que necesita corrección.

---

## 15.1. Presentación de las cifras

El simulador mostrará:

- Una **estimación central** fácil de comparar.
- Un **intervalo orientativo** que refleje la variación posible del resultado.

La estimación central nunca se presentará como una cantidad garantizada.

---

## 16. Ejemplo sencillo, solo para explicar el funcionamiento

Una persona introduce:

- Ingresos anuales: **80.000 €**
- Gastos deducibles: **25.000 €**
- Beneficio previo: **55.000 €**
- Otros ingresos personales: **0 €**
- Dinero que necesitaría retirar de la sociedad: **35.000 € brutos**
- Costes adicionales de la sociedad: **importe indicado por el usuario**

La herramienta calculará:

### Como autónomo

- Beneficio de la actividad.
- Cotización estimada.
- IRPF estimado.
- Dinero personal disponible.

### Como sociedad

- Retribución y cotización de la persona.
- Resultado de la sociedad.
- Impuesto sobre Sociedades.
- Posibles dividendos e IRPF correspondiente.
- Dinero personal disponible.
- Dinero que permanece en la sociedad.
- Costes adicionales de la estructura.

Este ejemplo no debe incluir un resultado fiscal cerrado en el documento, porque dependerá de la configuración fiscal vigente, la comunidad autónoma y las circunstancias personales utilizadas.

---

## 17. Pantalla de resultado

### Título

**Tu comparación orientativa**

### Resumen principal

- Opción que merece estudiarse.
- Diferencia económica estimada.
- Dinero personal disponible en cada escenario.
- Dinero que permanecería dentro de la sociedad.

### Explicación «por qué»

El resultado señalará los tres factores que más han influido. Por ejemplo:

- Necesitas retirar la mayor parte del beneficio para uso personal.
- La sociedad añade costes anuales de gestión.
- Una parte del beneficio podría permanecer dentro de la sociedad.
- Tus otros ingresos aumentan el tipo marginal del IRPF.
- La diferencia entre las opciones es demasiado pequeña para obtener una conclusión clara.

### Desglose

Tabla comparativa con impuestos, cotizaciones, costes y dinero disponible.

### Aviso final

> **Resultado orientativo y no vinculante.** Esta simulación se basa en los datos introducidos y en la normativa configurada en la fecha indicada. No sustituye un estudio fiscal personalizado. La conveniencia de trabajar como autónomo o mediante una sociedad depende también de circunstancias personales, jurídicas y empresariales.

Debajo se mostrará:

> **Cálculos orientativos basados en normativa y datos oficiales vigentes consultados en junio de 2026.**

### Botones

- **[Modificar datos]**
- **[Solicitar una revisión]**

---

## 18. Conexión con el formulario

El botón **Solicitar una revisión** llevará al formulario de contacto.

Con consentimiento del usuario, podrá añadir automáticamente:

- Resultado general: autónomo, sociedad o sin diferencia clara.
- Ejercicio fiscal utilizado.
- Comunidad autónoma.
- Intervalo de ingresos.
- Intervalo de beneficio.
- Necesidad indicada: revisión autónomo vs. sociedad.

No se enviarán importes exactos ni detalles personales sin informar al usuario y obtener su consentimiento.

Mensaje sugerido:

> He utilizado el simulador Autónomo vs. Sociedad y me gustaría revisar mi situación.

---

## 19. Validaciones y mensajes de error

### Campos obligatorios vacíos

> Completa los datos necesarios para realizar la comparación.

### Ingresos negativos

> Los ingresos no pueden ser negativos.

### Gastos superiores a los ingresos

> Con los datos introducidos no existe un beneficio positivo que permita realizar esta comparación. Podemos revisar tu situación de forma personalizada.

### Dinero que quiere retirar superior al disponible

> La cantidad que deseas retirar supera el resultado disponible de la sociedad. Reduce el importe o revisa los datos.

### Costes negativos

> Los costes no pueden ser negativos.

### Datos fuera del alcance

> Tu situación necesita una revisión específica y no puede calcularse correctamente con esta herramienta.

### Cifras anormalmente elevadas

> Revisa las cantidades introducidas. Alguna parece anormalmente elevada. Confirma que es correcta antes de continuar.

### Límites económicos aprobados

- Beneficio anual: de **0 € a 1.000.000 €**.
- Si el beneficio anual supera **1.000.000 €**, no se realizará el cálculo y se mostrará: **«Este caso requiere un estudio personalizado»**.
- Dinero que necesita retirar: entre **0 € y el beneficio disponible**.
- Costes adicionales de la sociedad: desde **0 € y sin límite máximo fijo**.
- No se admitirán cantidades negativas.
- Un coste adicional anormalmente elevado generará un aviso y una petición de confirmación, pero no bloqueará el cálculo si el usuario confirma el dato.

### Formato

- Se aceptará coma o punto decimal.
- Los importes se mostrarán con formato español.
- No se admitirán valores infinitos, texto libre o cálculos no numéricos.
- Los cálculos internos no utilizarán números de coma flotante sin control para importes monetarios.

---

## 20. Diseño visual

El simulador deberá seguir el diseño real de la página **Contabilidad y Fiscalidad**.

Criterios:

- Misma paleta, tipografías, bordes y botones de la página.
- Sin ilustraciones financieras genéricas.
- Una pregunta o grupo pequeño de campos por paso.
- Explicaciones breves junto a cada campo.
- Resultado visualmente separado de los datos introducidos.
- Comparación clara en dos columnas en escritorio.
- Contenido apilado en móvil.
- El color no será el único recurso para indicar qué opción destaca.
- No se usarán mensajes comerciales agresivos como «ahorra X € garantizados».

El aspecto definitivo deberá diseñarse después de comprobar la captura completa y actualizada de la página.

---

## 21. Requisitos técnicos para Astro

### Frontend

- Componente de Astro con JavaScript cliente únicamente para la interacción.
- Cálculo en el navegador.
- Sin recarga de página.
- HTML inicial útil y rastreable para SEO.
- JavaScript cargado solo cuando el simulador entre en interacción o resulte necesario.

### Configuración fiscal separada

Las reglas no se escribirán directamente dentro del componente visual.

Estructura orientativa:

`src/data/fiscal/2026.json`

La configuración deberá contener:

- Año fiscal.
- Fecha de última revisión.
- Escala estatal del IRPF.
- Escalas autonómicas publicadas.
- Escala del ahorro.
- Mínimos personales y familiares implementados.
- Tramos y bases de cotización.
- Tipos de cotización.
- Tipos del Impuesto sobre Sociedades.
- Condiciones activadas para cada tipo.
- Límites y redondeos.
- Margen de prudencia.
- Identificación de la fuente oficial de cada dato.

La interfaz mostrará:

> Cálculos orientativos basados en normativa y datos oficiales vigentes consultados en junio de 2026.

La fecha se actualizará cada vez que se renueve la configuración fiscal. Mientras no se actualice, seguirá mostrando la fecha real de la última consulta y nunca aparentará utilizar datos más recientes.

### Backend

PHP y MariaDB no son necesarios para realizar el cálculo.

Solo se utilizarán si el usuario decide enviar el resultado junto al formulario de contacto. El cálculo debe funcionar aunque no se guarde ningún dato.

### Precisión monetaria

- Trabajar internamente en céntimos o utilizar una librería decimal adecuada.
- Redondear únicamente en los puntos definidos.
- No encadenar redondeos visuales dentro de cálculos posteriores.
- Documentar la regla de redondeo de cada impuesto y cotización.

---

## 22. Accesibilidad

- Todos los campos tendrán una etiqueta visible.
- Las ayudas estarán asociadas mediante `aria-describedby`.
- Los errores se anunciarán a lectores de pantalla.
- Los pasos podrán completarse solo con teclado.
- El foco pasará al título de cada paso y al resultado final.
- La tabla comparativa tendrá encabezados correctos.
- Los botones describirán claramente su acción.
- No se bloqueará el zoom.
- Se respetará `prefers-reduced-motion`.

---

## 23. Privacidad

- No será obligatorio indicar nombre, teléfono o correo para ver el resultado.
- Los cálculos podrán realizarse localmente en el navegador.
- No se guardarán importes económicos por defecto.
- La analítica no registrará cantidades exactas.
- Solo se enviará información al formulario con una acción consciente y consentimiento.
- Si se guardan resultados, deberá definirse finalidad, plazo de conservación y acceso.

---

## 24. SEO

El contenido que explica el simulador deberá existir en HTML y no depender completamente de JavaScript.

La sección podrá incluir:

- Qué significa trabajar como autónomo.
- Qué implica crear una sociedad.
- Por qué no basta con comparar un porcentaje de IRPF y otro de Sociedades.
- Qué costes y obligaciones adicionales tiene una sociedad.
- Por qué el dinero de la sociedad no es automáticamente dinero personal.
- Cuándo se necesita una revisión individual.

No se crearán afirmaciones como:

- «A partir de X euros siempre compensa una sociedad».
- «Con una sociedad pagarás menos impuestos».
- «Ahorro fiscal garantizado».

Estas frases serían demasiado generales y pueden resultar falsas según el caso.

Los datos estructurados de FAQ solo se utilizarán para preguntas y respuestas visibles en la página.

---

## 25. Medición

Se podrán medir estos eventos sin registrar cifras económicas:

- Inicio del simulador.
- Paso completado.
- Simulación completada.
- Resultado general mostrado.
- Modificación de datos.
- Clic en solicitar revisión.

No se enviarán a analítica:

- Ingresos exactos.
- Gastos exactos.
- Otros ingresos personales.
- Datos familiares.
- Importes retirados.

---

## 26. Pruebas obligatorias

### Pruebas funcionales

1. Todos los campos vacíos.
2. Ingresos iguales a cero.
3. Gastos iguales a ingresos.
4. Gastos superiores a ingresos.
5. Beneficio muy pequeño.
6. Beneficio situado justo en cada cambio de tramo.
7. Otros ingresos personales iguales a cero.
8. Otros ingresos que cambian el tramo del IRPF.
9. Retirada de todo el beneficio.
10. Retirada parcial del beneficio.
11. Sin reparto de dividendos.
12. Reparto parcial.
13. Reparto total.
14. Costes adicionales de sociedad iguales a cero.
15. Costes adicionales elevados.
16. Sociedad nueva que cumple los requisitos.
17. Sociedad que no cumple los requisitos.
18. Usuario que no sabe si cumple los requisitos.
19. Caso fuera del alcance.
20. Diferencia inferior al margen de prudencia.

### Pruebas fiscales

- Límites exactos de cada tramo de IRPF.
- Límites exactos de la base del ahorro.
- Límites exactos de cotización.
- Primeros 50.000 € y resto cuando el tipo de Sociedades sea escalonado.
- Cambio entre microempresa, reducida dimensión y tipo general.
- Aplicación y no aplicación del tipo de nueva creación.
- Tratamiento de la cotización en cada escenario.
- Separación entre retribución, dividendos y beneficio retenido.
- Redondeos.

### Pruebas de interfaz

- Escritorio.
- Tableta.
- Móvil estrecho.
- Navegación con teclado.
- Lector de pantalla.
- Zoom al 200 %.
- Errores asociados al campo correcto.
- Retroceso entre pasos sin perder datos.
- Reinicio completo.

### Pruebas de coherencia

- Los mismos datos de partida utilizan siempre el mismo motor fiscal.
- Los cambios anuales de configuración se aplican correctamente.

### Comprobación objetiva de los cálculos

Antes de publicar:

1. Crear casos de prueba con distintos beneficios, comunidades autónomas y situaciones familiares.
2. Comparar el IRPF con **Renta WEB Open** de la Agencia Tributaria.
3. Comparar el Impuesto sobre Sociedades con **Sociedades WEB Open**.
4. Comparar las cuotas de autónomos con las tablas oficiales de la Seguridad Social.
5. Crear pruebas automáticas para evitar que una actualización rompa cálculos anteriores.
6. Guardar un documento con los casos probados y los resultados esperados.

Si alguna prueba falla, el simulador no estará listo para publicarse.

---

## 27. Actualización anual obligatoria

Al comenzar cada ejercicio:

1. Comprobar las escalas estatal y autonómicas del IRPF.
2. Comprobar la escala de la base del ahorro.
3. Comprobar los mínimos personales y familiares.
4. Comprobar las tablas y tipos de cotización.
5. Comprobar los tipos del Impuesto sobre Sociedades.
6. Comprobar las reglas para entidades de nueva creación.
7. Revisar cambios en dividendos y retribuciones.
8. Ejecutar toda la batería de pruebas.
9. Actualizar el año y la fecha visible.
10. Conservar la configuración anterior para poder auditar cálculos antiguos, sin ofrecerla como cálculo vigente.

Si la configuración del nuevo año todavía no está actualizada, el simulador mantendrá el último ejercicio disponible y mostrará claramente la fecha real de sus datos. Nunca actualizará las cifras de forma automática ni aparentará estar al día.

---

## 28. Fuentes oficiales de referencia

Las cifras definitivas deben comprobarse siempre contra fuentes oficiales del ejercicio publicado:

- [Agencia Tributaria — tipos del Impuesto sobre Sociedades](https://sede.agenciatributaria.gob.es/Sede/impuesto-sobre-sociedades/que-base-imponible-se-determina-sociedades/tipo-impositivo.html)
- [Agencia Tributaria — escala estatal del IRPF](https://sede.agenciatributaria.gob.es/Sede/ayuda/manuales-videos-folletos/manuales-ayuda-presentacion/irpf-2025/8-cumplimentacion-irpf/8_4-cuota-integra/8_4_3-gravamen-base-liquidable-general/8_4_3_1-cuota-integra-estatal.html)
- [Agencia Tributaria — gravamen autonómico del IRPF](https://sede.agenciatributaria.gob.es/Sede/ayuda/manuales-videos-folletos/manuales-practicos/irpf-2024/c15-calculo-impuesto-determinacion-cuotas-integras/gravamen-base-liquidable-general/gravamen-autonomico.html)
- [Agencia Tributaria — dividendos y participación en fondos propios](https://sede.agenciatributaria.gob.es/Sede/ayuda/manuales-videos-folletos/manuales-practicos/irpf-2025/c05-rendimientos-capital-mobiliario.html)
- [Seguridad Social — tablas de rendimientos y bases de cotización](https://www.seg-social.es/wps/portal/wss/internet/Trabajadores/CotizacionRecaudacionTrabajadores/10721/10724/1320/1322)
- [Seguridad Social — inclusión y control efectivo en el RETA](https://www.seg-social.es/wps/portal/wss/internet/Trabajadores/Afiliacion/10548/32825)
- [PAE — información sobre formas jurídicas y constitución](https://paeelectronico.es/es-es/CreaEmpresaConAyuda/Paginas/ServiciosPae.aspx)

Los enlaces sirven como punto de partida. En cada actualización deberán comprobarse también la normativa aplicable y las publicaciones oficiales vigentes en la fecha indicada.

---

## 29. Decisiones cerradas antes del desarrollo

1. El simulador servirá para residentes fiscales de toda España e incluirá un selector territorial.
2. El simulador contemplará comunidad autónoma, estado civil, hijos, discapacidad, ascendientes, declaración y los demás datos necesarios definidos en este documento.
3. La forma de retirar el dinero tendrá únicamente tres opciones: retribución, dividendos o combinación.
4. Una diferencia inferior al 5 % se considerará insuficiente para destacar una opción.
5. El beneficio admitido será de 0 € a 1.000.000 €; los casos superiores requerirán un estudio personalizado.
6. Los costes adicionales no tendrán un máximo fijo. Los importes anormalmente elevados pedirán confirmación.
11. Las dos versiones mostrarán una estimación central y un intervalo orientativo.
12. El aviso legal será visible junto al resultado e indicará que la simulación es orientativa y no vinculante.
13. Se mostrará la frase: **«Cálculos orientativos basados en normativa y datos oficiales vigentes consultados en junio de 2026»**.
14. Los datos fiscales estarán separados del código y podrán actualizarse por ejercicio.
15. Los cálculos se comprobarán mediante pruebas objetivas, herramientas de simulación oficiales y pruebas automáticas.

No quedan decisiones funcionales pendientes de las diez revisadas. Antes de programar solo falta recopilar la configuración fiscal de junio de 2026, crear los casos de prueba y desarrollar el simulador.

---

## 30. Decisión recomendada

La versión más responsable y útil no debe venderse como una calculadora que determina automáticamente cuál es la mejor forma jurídica.

Debe presentarse como:

> **Una comparación orientativa que ayuda a entender qué factores intervienen y si merece la pena solicitar un estudio profesional.**

Así encaja con la página, responde a las preguntas frecuentes, aporta valor al visitante y evita ofrecer una recomendación fiscal falsa basada únicamente en la facturación.
