# Casos de prueba — Contraste del motor contra herramientas oficiales

Documento exigido por la sección 26 del documento del simulador ("Comprobación objetiva de los cálculos", punto 6: "Guardar un documento con los casos probados y los resultados esperados"). No duplica contenido del propio simulador ni de `esquema-web-PyA.md`; solo registra los casos probados y sus resultados.

## Metodología

Cada caso se introduce a mano en la herramienta oficial de la Agencia Tributaria correspondiente (Renta WEB Open para IRPF, Sociedades WEB Open para Impuesto sobre Sociedades), con interacción real (clicks y tecleo, sin inyección de valores por JavaScript, para evitar conflictos con el framework ZK de la AEAT). El resultado oficial se compara con la salida de `motorAutonomoVsSociedad.ts` para el mismo caso.

Las cuotas de autónomos (RETA) se verifican por separado, comparando la tabla de `cotizacion_reta` en `2025.json` directamente contra el texto de la Orden PJC/178/2025 (BOE), fuente que ya usa el propio fichero — no hace falta una tercera herramienta.

## Caso 1 — Autónomo, Madrid, beneficio medio, sin otros ingresos ni hijos

**Datos de entrada:**
- Comunidad autónoma: Madrid
- Ingresos de la actividad: 40.000 €
- Gastos deducibles: 10.000 €
- Otros ingresos personales: 0 €
- Edad: 40 años, soltero/a, sin hijos, sin discapacidad, sin ascendientes a cargo
- Actividad: estimación directa simplificada (epígrafe genérico "Resto de actividades profesionales", A05)

**Resultado en Renta WEB Open (oficial, 31/07/2026):**
- Mínimo personal y familiar: 5.550,00 € (estatal) / 5.956,65 € (autonómico Madrid)
- Rendimiento neto reducido (base general): 23.645,31 €
- Cuota íntegra estatal: 2.102,30 € — Cuota íntegra autonómica: 1.827,22 €
- **IRPF total: 3.929,52 €**

**Resultado del motor (antes de corregir, 31/07/2026):** 4.275,48 € — **345,96 € de más (8,8%)**.

**Causa:** el motor no aplicaba la deducción por "gastos de difícil justificación" de la estimación directa simplificada (art. 30.2ª del Reglamento del IRPF): 5% del rendimiento neto previo positivo, con un límite de 2.000 €/año. En este caso: 5% de 24.889,80 € = 1.244,49 €.

**Corrección aplicada:** `motorAutonomoVsSociedad.ts` ahora resta esta deducción antes de calcular la base general del escenario Autónomo (ver `fiscal2025.irpf.gastos_dificil_justificacion_estimacion_directa_simplificada` en `2025.json`).

**Resultado del motor (después de corregir):** 3.929,52 € — **coincide al céntimo con Renta WEB Open.**

**Verificado también en la interfaz real** (`/contabilidad-y-fiscalidad`, simulador "¿Autónomo o sociedad?"): con los mismos datos, "Impuestos y cotizaciones" del escenario Autónomo muestra 9.040 € = 5.110,20 € (RETA) + 3.929,52 € (IRPF corregido). Coincide.

## Cuotas RETA — verificación directa contra BOE

Se compararon los 15 tramos de `cotizacion_reta.tramos` en `2025.json` contra el texto de la Orden PJC/178/2025 (BOE-A-2025-3780). Coinciden exactamente en base mínima, base máxima y base máxima general (4.909,50 €/mes) en los 15 tramos. Sin discrepancias.

## Caso 2 — Sociedad, Madrid, mismo beneficio (intento, no completado)

**Datos de entrada previstos** (mismo caso base que el Caso 1, escenario Sociedad): ingresos 40.000 €, gastos 10.000 €, Madrid, retirada por retribución de 20.000 €, sin costes adicionales, tipo general (no reducido). El motor predice: base imponible IS = 10.000 € (resultado previo 30.000 € − retribución 20.000 €), tipo general 25% → **Impuesto sobre Sociedades = 2.500,00 €**.

**Intento en Sociedades WEB Open (31/07/2026):** se completaron los datos identificativos (NIF, razón social), caracteres de la declaración (marcado "INCN inferior a 20 millones de euros", período impositivo 01/01/2025–31/12/2025, estados de cuentas Mod. PYMES) y se accedió a la declaración completa (29 páginas). **No se llegó a introducir la base imponible ni a leer la cuota**: el árbol de navegación "Apartados" de este simulador es más frágil que el de Renta WEB Open — cada fila tiene un icono de expandir independiente del texto de la fila (clicar el texto navega Y colapsa a la vez, de forma inconsistente), lo que hizo perder mucho tiempo sin llegar a la página "Liquidación (III) — Base imponible". Se abandonó el intento por falta de tiempo, no por haber encontrado un problema en el motor.

**Por qué no es tan urgente como el caso de IRPF:** el cálculo del Impuesto sobre Sociedades en el motor es una multiplicación directa (base × tipo fijo), sin tramos ni deducciones legales que se puedan pasar por alto — el tipo de riesgo de bug oculto es mucho menor que en el IRPF (que tiene mínimos, tramos progresivos y deducciones como la que sí se encontró en el Caso 1). La única simplificación conocida en el motor (no distingue microempresa/reducida dimensión, ver "Simplificaciones aplicadas" en la interfaz) ya está documentada y visible para el usuario.

## Pendiente

- Completar el Caso 2 (contraste real de IS contra Sociedades WEB Open) cuando se disponga de más tiempo — probablemente merece su propia sesión dedicada a mapear la navegación de esa herramienta.
- Casos adicionales con distinta comunidad autónoma, situación familiar (hijos, discapacidad) y niveles de beneficio (pérdidas, tramos límite de IRPF) — sección 26 pide varios casos, de momento solo hay uno completo y validado.
- Automatizar estos casos como pruebas automáticas (punto 5 de la sección 26) para detectar regresiones en futuras actualizaciones del motor o de los datos fiscales.
