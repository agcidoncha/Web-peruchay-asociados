# Home móvil simplificada — Perucha y Asociados

## Objetivo

Simplificar únicamente la Home móvil de Perucha y Asociados para reducir su longitud, manteniendo todas las funciones necesarias y reutilizando la maquetación existente.

La versión de escritorio debe mantenerse exactamente como está.

## Cambios que hay que realizar

### 1. Hero móvil

- Mantener el hero móvil del último diseño aprobado.
- Mantener visible el botón **«Empezar diagnóstico»**.

### 2. Diagnóstico rápido

El simulador general **«Diagnóstico rápido / ¿Qué necesita tu empresa?»** estará inicialmente oculto.

Al pulsar **«Empezar diagnóstico»**:

- Se mostrará la caja completa del simulador que ya existe actualmente.
- Aparecerá justo después del hero móvil.
- Quedará antes de la sección **«Tres áreas, una visión clara»**.
- Se reutilizará la maquetación actual completa del simulador.
- No debe introducirse dentro del hero ni dentro de otra tarjeta.
- No se debe duplicar el simulador.

### 3. Tres áreas, una visión clara

Mantener la sección con los tres servicios:

1. Control de Gestión.
2. Contabilidad y Fiscalidad.
3. Digitalización y Automatización.

Cada tarjeta debe enlazar a su página correspondiente.

### 4. Simuladores específicos

Mantener los tres simuladores específicos:

1. Punto de equilibrio.
2. Autónomo o sociedad.
3. Horas ahorradas mediante automatización.

Estos simuladores **no se desplegarán en la Home**.

Cada botón **«Abrir simulador»** llevará directamente al simulador existente dentro de la página del servicio correspondiente, utilizando su URL y ancla reales.

### 5. Bloque final de contacto

Mantener la caja **«¿No sabes por dónde empezar?»** con el botón **«Cuéntanos tu caso»**.

El formulario de contacto estará inicialmente oculto.

Al pulsar **«Cuéntanos tu caso»**:

- El formulario actual de la Home se desplegará dentro de esa misma caja.
- Se reutilizarán el formulario, sus campos y su funcionamiento actuales.
- No se debe crear otro formulario ni duplicar su lógica.

### 6. Botón «Hablemos» del menú móvil

El botón **«Hablemos»** debe llevar al mismo formulario de contacto.

Si el formulario está cerrado:

1. Debe abrirlo.
2. Debe desplazar al usuario hasta él.

### 7. Footer móvil

- Eliminar **«Villaviciosa de Odón · Madrid»**.
- Sustituirlo por enlaces a los tres servicios:
  - Control de Gestión.
  - Contabilidad y Fiscalidad.
  - Digitalización y Automatización.
- Mantener el resto del diseño del footer aprobado.

## Condiciones importantes

- No modificar la versión de escritorio.
- Respetar completamente el último diseño móvil aprobado: colores, tipografías, espacios, tarjetas y jerarquía visual.
- Reutilizar los componentes, cajas, formulario y simuladores que ya existen.
- No duplicar contenido ni crear estructuras metidas innecesariamente unas dentro de otras.
- Mantener HTML semántico, accesibilidad, SEO y buen rendimiento.
- Los controles desplegables deben ser botones reales.
- Los botones deben actualizar correctamente `aria-expanded` y `aria-controls`.
- El contenido oculto no debe depender de JavaScript innecesario para cargarse.
- Antes de modificar, revisar la estructura actual del proyecto y localizar los componentes, enlaces y anclas existentes.
- No cambiar textos, diseño ni funcionamiento fuera de lo indicado.

## Estados que deben comprobarse

1. **Home cerrada:** diagnóstico y formulario ocultos.
2. **Diagnóstico abierto:** caja del simulador visible entre el hero y «Tres áreas, una visión clara».
3. **Formulario abierto:** formulario visible dentro de la caja «¿No sabes por dónde empezar?».
4. **Acceso desde «Hablemos»:** abre el formulario si está cerrado y desplaza correctamente hasta él.
5. **Simuladores específicos:** cada botón abre el simulador correcto en su página de servicio.

