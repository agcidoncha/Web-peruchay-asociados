# Calculadora de punto de equilibrio — Perucha y Asociados

## 1. Descripción general

La **Calculadora de punto de equilibrio** es una herramienta interactiva que se mostrará dentro de la página **Control de Gestión** de Perucha y Asociados.

Su función es ayudar a una empresa a responder una pregunta muy sencilla:

> **¿Cuánto tengo que vender para cubrir todos mis costes y dejar de perder dinero?**

El resultado será orientativo. No sustituirá un análisis financiero completo, porque una empresa real puede tener distintos productos, precios, costes, impuestos y otras circunstancias que no caben en una calculadora sencilla.

---

## 2. Explicación para cualquier persona

Una empresa tiene gastos aunque todavía no haya vendido nada. Por ejemplo, puede pagar un alquiler, seguros o programas informáticos.

Además, cada vez que vende un producto o presta un servicio puede tener otros gastos. Por ejemplo, materiales, embalaje o comisiones.

El **punto de equilibrio** es el momento en el que el dinero obtenido con las ventas alcanza justo para pagar todos esos costes.

- **Antes del punto de equilibrio:** la empresa pierde dinero.
- **En el punto de equilibrio:** la empresa no gana ni pierde.
- **Después del punto de equilibrio:** la empresa empieza a obtener beneficio.

La calculadora no debe decir que en el punto de equilibrio la empresa ya gana dinero. En ese punto únicamente ha conseguido cubrir sus costes.

---

## 3. Objetivos

- Explicar el punto de equilibrio de forma fácil.
- Ayudar a entender la relación entre costes, precios y ventas.
- Calcular cuántas unidades o servicios deben venderse para cubrir los costes.
- Calcular la facturación mínima aproximada necesaria.
- Mostrar cuánto aporta cada venta a pagar los costes fijos.
- Permitir probar distintos precios y costes para comparar escenarios.
- Conectar el resultado con el servicio de Control de Gestión.
- Facilitar que el usuario solicite una valoración profesional de su situación.

---

## 4. Ubicación en la web

La calculadora formará parte de la página:

**Finanzas y Control** (`/finanzas-y-control`)

Se colocará después de explicar los servicios relacionados con costes, márgenes y rentabilidad, y antes de la llamada final a contacto.

No necesita una página independiente en la primera versión.

El menú **Simuladores** podrá enlazar directamente a esta sección mediante un ancla, por ejemplo:

`/control-de-gestion#punto-de-equilibrio`

---

## 5. Presentación inicial

### Título

**Calcula el punto de equilibrio de tu empresa**

### Texto de introducción

Descubre cuántas unidades necesitas vender y cuánto debes facturar para cubrir tus costes. Solo tienes que introducir tres datos.

### Aviso breve

El resultado es una estimación orientativa y no sustituye un análisis financiero adaptado a tu empresa.

---

## 6. Los tres datos que solicitará

Todos los importes deberán corresponder al **mismo periodo** y escribirse **sin IVA**.

Por defecto se trabajará con un periodo mensual, aunque el usuario podrá cambiarlo a anual.

### 6.1. Costes fijos

**Pregunta que verá el usuario:**

> ¿Cuánto pagas en costes fijos?

**Ayuda sencilla:**

Son los gastos que tienes aunque no vendas nada, como alquiler, seguros, gestoría, salarios fijos o programas informáticos.

**Campo:**

- Tipo: número decimal.
- Unidad: euros.
- Ejemplo visible: `5.000 € al mes`.

### 6.2. Precio de venta

**Pregunta que verá el usuario:**

> ¿A qué precio vendes cada unidad o servicio?

**Ayuda sencilla:**

Es el importe que cobras al cliente por una unidad, pedido o servicio, sin incluir el IVA.

**Campo:**

- Tipo: número decimal.
- Unidad: euros por venta.
- Ejemplo visible: `50 €`.

### 6.3. Coste variable por venta

**Pregunta que verá el usuario:**

> ¿Cuánto te cuesta realizar cada venta?

**Ayuda sencilla:**

Es el gasto que aparece cada vez que vendes, como materiales, embalaje, transporte, comisiones o mano de obra directamente asociada.

**Campo:**

- Tipo: número decimal.
- Unidad: euros por venta.
- Ejemplo visible: `20 €`.

### Selector del periodo

El usuario elegirá una opción:

- **Mensual**
- **Anual**

Este selector solo sirve para identificar el periodo de los costes fijos y del resultado. No debe multiplicar ni dividir automáticamente las cantidades introducidas.

---

## 7. Explicación de «unidad» para empresas de servicios

La palabra **unidad** no se refiere únicamente a un producto físico.

También puede representar:

- Una consulta.
- Un proyecto.
- Una reserva.
- Una sesión.
- Una cuota.
- Un pedido medio.
- Una hora facturable.

La interfaz podrá utilizar la expresión **«unidad o servicio»** para que la calculadora resulte comprensible para diferentes tipos de empresa.

Si una empresa vende muchos productos o servicios con precios y costes muy distintos, necesitará utilizar valores medios o solicitar un análisis más detallado.

---

## 8. Cálculos que realizará

### 8.1. Margen de contribución por venta

Primero se calculará cuánto dinero deja cada venta para pagar los costes fijos:

`Margen por venta = Precio de venta − Coste variable por venta`

Ejemplo:

`50 € − 20 € = 30 €`

Explicación para el usuario:

> De cada venta de 50 €, se utilizan 20 € para cubrir su coste variable y quedan 30 € para pagar los costes fijos.

### 8.2. Punto de equilibrio en unidades

Después se calculará cuántas ventas hacen falta:

`Punto de equilibrio = Costes fijos ÷ Margen por venta`

El resultado deberá **redondearse siempre hacia arriba**, porque no se puede vender una fracción de una unidad cuando se trabaja con productos, pedidos o servicios completos.

Ejemplo:

`5.000 € ÷ 30 € = 166,67`

Resultado mostrado:

`Necesitas realizar 167 ventas.`

### 8.3. Facturación mínima aproximada

`Facturación mínima = Unidades redondeadas × Precio de venta`

Ejemplo:

`167 × 50 € = 8.350 €`

Resultado mostrado:

`Necesitas facturar aproximadamente 8.350 € en el periodo seleccionado.`

### 8.4. Margen de contribución porcentual

También podrá mostrarse como información complementaria:

`Margen porcentual = Margen por venta ÷ Precio de venta × 100`

Ejemplo:

`30 € ÷ 50 € × 100 = 60 %`

Explicación sencilla:

> De cada 100 € vendidos, aproximadamente 60 € quedan disponibles para cubrir los costes fijos.

---

## 9. Ejemplo completo

Una empresa introduce:

- Costes fijos mensuales: **5.000 €**
- Precio de cada servicio: **50 €**
- Coste variable de cada servicio: **20 €**

La calculadora hace lo siguiente:

1. Resta el coste variable al precio: `50 € − 20 € = 30 €`.
2. Cada venta aporta **30 €** para pagar los costes fijos.
3. Divide los costes fijos entre esos 30 €: `5.000 € ÷ 30 € = 166,67`.
4. Redondea el resultado hacia arriba: **167 ventas**.
5. Multiplica las ventas por el precio: `167 × 50 € = 8.350 €`.

### Resultado explicado

> Necesitas realizar aproximadamente **167 ventas al mes** y facturar alrededor de **8.350 €** para cubrir los costes indicados.
>
> El punto de equilibrio matemático se alcanza durante la venta número 167. Como la calculadora trabaja con ventas completas, redondea hacia arriba: al completar las 167 ventas ya habrías cubierto los costes y los superarías ligeramente, siempre que los datos introducidos se mantengan.

---

## 10. Pantalla del resultado

### Resultado principal

**Tu punto de equilibrio**

**167 ventas al mes**

### Resultado económico

**Facturación mínima aproximada: 8.350 € al mes**

### Desglose

- Cada venta aporta **30 €** para cubrir costes fijos.
- Tu margen de contribución es aproximadamente del **60 %**.
- Con **166 ventas** todavía no cubrirías completamente los costes.
- Con **167 ventas** alcanzarías o superarías ligeramente el punto de equilibrio.

### Explicación final

> Este es el nivel de ventas aproximado que necesitas para no perder dinero. Superarlo no significa que toda la facturación adicional sea beneficio, porque cada nueva venta seguirá teniendo su coste variable.

### Botones

- **[Probar otros datos]**
- **[Solicitar un análisis]**

---

## 11. Comportamiento de la interfaz

- La herramienta mostrará los tres campos en una sola pantalla.
- Cada campo incluirá una explicación breve y un ejemplo.
- El usuario podrá calcular mediante el botón **Calcular mi punto de equilibrio**.
- El resultado aparecerá en la misma sección, sin recargar la página.
- Los números se formatearán según el uso habitual en España:
  - Miles con punto: `8.350`.
  - Decimales con coma: `30,50`.
  - Símbolo del euro después del número: `8.350 €`.
- El usuario podrá modificar los datos y recalcular.
- El botón **Probar otros datos** devolverá el foco al primer campo, pero no borrará los valores automáticamente.
- Solo se borrarán los datos si existe un botón claramente identificado como **Reiniciar**.
- No habrá valores económicos preseleccionados que puedan confundirse con datos reales. Los ejemplos aparecerán como ayuda, no como datos introducidos.
- La calculadora deberá funcionar con teclado y lectores de pantalla.

---

## 12. Validaciones y mensajes de error

### Campos vacíos

Mensaje:

> Introduce los tres datos para realizar el cálculo.

### Cero o números negativos

No se admitirán precios o costes negativos.

Si los costes fijos son cero, podrá mostrarse:

> Según los datos introducidos, no existen costes fijos que cubrir. Revisa la cantidad si este resultado no refleja tu situación.

### El coste variable es igual al precio

No existe margen para pagar los costes fijos.

Mensaje:

> Cada venta cuesta lo mismo que ingresas por ella. Con estos datos, ninguna venta aporta dinero para cubrir los costes fijos.

### El coste variable es mayor que el precio

Cada venta aumenta la pérdida.

Mensaje:

> El coste de cada venta es superior a su precio. Antes de calcular el punto de equilibrio, sería necesario revisar el precio o reducir el coste variable.

### Cantidades demasiado grandes

Se establecerá un límite técnico razonable para evitar errores de introducción. Si se supera:

> Revisa la cantidad introducida. Parece demasiado elevada para este cálculo.

### Decimales

Se aceptarán tanto coma como punto decimal. Antes de calcular, el sistema convertirá el valor a un formato numérico seguro.

---

## 13. Casos especiales

### Varios productos o servicios

La calculadora sencilla utiliza un único precio y un único coste variable.

Si la empresa vende productos diferentes, podrá introducir:

- Un precio medio por venta.
- Un coste variable medio por venta.

Se mostrará este aviso:

> Si vendes productos o servicios con márgenes muy diferentes, este resultado puede ser poco preciso. Un análisis por líneas de negocio ofrecerá una visión más fiable.

### Negocios sin unidades claras

Podrán utilizar como unidad un proyecto, cliente, pedido, sesión u hora facturable.

### Costes semivariables

Algunos costes tienen una parte fija y otra variable. Para una primera estimación, el usuario deberá separar ambas partes. Si no sabe hacerlo, la calculadora indicará que conviene solicitar ayuda profesional.

### IVA e impuestos

Los importes se introducirán **sin IVA**. La calculadora no calculará impuestos ni obligaciones fiscales.

---

## 14. Representación visual opcional

Debajo del resultado podrá aparecer una gráfica sencilla:

- Línea de **ingresos**.
- Línea de **costes totales**.
- Punto en el que ambas líneas se cruzan.
- Zona anterior: **pérdida**.
- Zona posterior: **beneficio**.

La gráfica será complementaria. El resultado principal siempre aparecerá también por escrito para que se entienda sin depender del color o de la visualización.

Esta gráfica no es imprescindible para la primera versión.

---

## 15. Conexión con el formulario de contacto

El botón **Solicitar un análisis** llevará al formulario de contacto.

Con autorización del usuario, el formulario podrá incorporar:

- Periodo seleccionado.
- Costes fijos.
- Precio de venta.
- Coste variable por venta.
- Margen por venta.
- Punto de equilibrio calculado.
- Facturación mínima aproximada.

El usuario deberá poder revisar esa información antes de enviarla.

Realizar el cálculo no enviará ni guardará datos. La información solo se enviará cuando el usuario complete y confirme el formulario.

---

## 16. Requisitos técnicos

La calculadora puede desarrollarse con:

- **Astro** para la estructura y el contenido.
- **HTML semántico** para el formulario y el resultado.
- **JavaScript** para validar los campos y realizar los cálculos.
- **CSS** para la presentación y los estados visuales.

No necesita PHP ni MySQL para calcular.

PHP y MySQL solo serían necesarios si el usuario decide enviar el resultado mediante el formulario de contacto.

Los cálculos se realizarán en el navegador. No se utilizarán librerías externas si JavaScript nativo puede resolverlos, para mantener la página ligera.

---

## 17. Fórmulas técnicas para el desarrollo

Variables:

- `CF`: costes fijos del periodo.
- `PV`: precio de venta por unidad o servicio.
- `CV`: coste variable por unidad o servicio.
- `MC`: margen de contribución por venta.
- `PE`: punto de equilibrio en unidades.
- `FM`: facturación mínima basada en unidades completas.
- `MC_porcentaje`: margen de contribución porcentual.

Fórmulas:

```text
MC = PV - CV
PE_exacto = CF / MC
PE_unidades = redondear_hacia_arriba(PE_exacto)
FM = PE_unidades * PV
MC_porcentaje = (MC / PV) * 100
```

Condiciones previas:

```text
CF >= 0
PV > 0
CV >= 0
PV > CV
```

Para evitar errores con decimales monetarios, la implementación deberá normalizar las entradas y realizar los cálculos con precisión suficiente antes de formatear el resultado.

---

## 18. Accesibilidad

- Cada campo tendrá una etiqueta visible.
- Las explicaciones estarán asociadas a sus campos.
- Los errores indicarán qué dato debe corregirse.
- El resultado se anunciará a los lectores de pantalla.
- La herramienta se podrá utilizar completamente con teclado.
- El foco se trasladará de forma controlada al resultado después del cálculo.
- No se utilizará únicamente el color para distinguir pérdida, equilibrio y beneficio.
- La gráfica, si se incluye, tendrá una explicación textual equivalente.

---

## 19. Privacidad

- La calculadora funcionará sin pedir nombre, correo ni teléfono.
- Los datos introducidos no se guardarán automáticamente.
- No se enviarán al servidor al pulsar **Calcular**.
- Solo se compartirán si el usuario decide contactar y confirma el envío del formulario.
- Si se mide el uso con analítica, se registrarán acciones generales, como iniciar o completar el cálculo, pero no las cantidades económicas introducidas.

---

## 20. SEO

La sección deberá incluir contenido visible que explique:

- Qué es el punto de equilibrio.
- Cómo se calcula.
- Qué son los costes fijos.
- Qué son los costes variables.
- Qué significa el margen de contribución.
- Por qué el resultado es orientativo.

La calculadora no debe depender únicamente de JavaScript para mostrar la explicación. El contenido informativo principal estará presente en el HTML generado por Astro.

Posible encabezado de la sección:

**Calculadora de punto de equilibrio: descubre cuánto necesitas vender**

No se creará una URL nueva en la primera versión, por lo que el SEO principal seguirá perteneciendo a la página **Control de Gestión**.

---

## 21. Criterios de comprobación

Antes de publicar se probarán, como mínimo, estos casos:

1. `CF 5.000`, `PV 50`, `CV 20` → **167 ventas** y **8.350 €**.
2. `CF 1.000`, `PV 100`, `CV 50` → **20 ventas** y **2.000 €**.
3. Resultado con decimales que obligue a redondear hacia arriba.
4. Coste variable igual al precio.
5. Coste variable superior al precio.
6. Costes fijos iguales a cero.
7. Campos vacíos.
8. Valores negativos.
9. Comas y puntos como separadores decimales.
10. Cantidades con separadores de miles.
11. Cambio entre periodo mensual y anual.
12. Uso completo mediante teclado.
13. Lectura correcta de errores y resultado con lector de pantalla.
14. Funcionamiento sin guardar ni enviar las cantidades introducidas.
15. Enlace correcto desde el menú Simuladores y hacia el formulario.

---

## 22. Decisiones pendientes de aprobación

- Confirmar si el periodo será seleccionable entre mensual y anual o únicamente mensual.
- Confirmar si se utilizará la expresión **unidad**, **venta** o **unidad o servicio**.
- Decidir si la primera versión incluirá la gráfica.
- Definir el diseño visual de los campos y del resultado.
- Confirmar si el resultado se incorporará al formulario de contacto.
- Definir el ancla definitiva de la sección.
- Confirmar el texto final de los botones.

Hasta que estas decisiones se aprueben, no deben considerarse cerradas ni implementarse como definitivas.
