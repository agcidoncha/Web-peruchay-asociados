import fiscal2025 from "../../data/fiscal/2025.json";

export type Comunidad =
	| "andalucia"
	| "aragon"
	| "asturias"
	| "baleares"
	| "canarias"
	| "cantabria"
	| "castilla-la-mancha"
	| "castilla-y-leon"
	| "cataluna"
	| "ceuta"
	| "extremadura"
	| "galicia"
	| "madrid"
	| "melilla"
	| "murcia"
	| "la-rioja"
	| "valencia"
	| "navarra"
	| "pais-vasco";

const comunidadAJsonKey: Record<Comunidad, string> = {
	andalucia: "andalucia",
	aragon: "aragon",
	asturias: "asturias",
	baleares: "illes_balears",
	canarias: "canarias",
	cantabria: "cantabria",
	"castilla-la-mancha": "castilla_la_mancha",
	"castilla-y-leon": "castilla_y_leon",
	cataluna: "cataluna",
	ceuta: "ceuta",
	extremadura: "extremadura",
	galicia: "galicia",
	madrid: "madrid",
	melilla: "melilla",
	murcia: "region_de_murcia",
	"la-rioja": "la_rioja",
	valencia: "comunitat_valenciana",
	navarra: "comunidad_foral_de_navarra",
	"pais-vasco": "pais_vasco",
};

interface Tramo {
	hasta: number | null;
	tipo: number;
}

export interface EntradaSimulador {
	comunidad: Comunidad;
	ingresos: number;
	gastos: number;
	otrosIngresos: number;
	edad: number;
	hijos: number;
	hijoDiscapacidad: boolean;
	discapacidad: boolean;
	ascendientes: number;
	dineroPersonal: number;
	retirada: "retribucion" | "dividendos" | "combinacion";
	costesAdicionales: number;
	tipoReducido: "quince" | "no" | "revision";
}

export interface DesgloseEscenario {
	beneficioAntesImpuestos: number;
	cotizaciones: number;
	irpf: number;
	impuestoSociedades: number;
	costesAdicionales: number;
	dineroPersonalDisponible: number;
	dineroQuePermaneceEnEmpresa: number | null;
	cargaTotal: number;
}

export interface ResultadoComparacion {
	comunidadDisponible: boolean;
	autonomo: DesgloseEscenario;
	sociedad: DesgloseEscenario;
	diferencia: number;
	diferenciaPct: number;
	tipoResultado: 1 | 2 | 3;
	tituloResultado: string;
	textoResultado: string;
	porQue: string[];
}

/**
 * Cuota íntegra por tramos progresivos (método estándar: no se resta el mínimo
 * de la base antes de aplicar tramos, se calcula cuota(base) - cuota(mínimo),
 * como en la Renta oficial).
 */
function cuotaProgresiva(base: number, tramos: Tramo[]): number {
	if (base <= 0) return 0;
	let cuota = 0;
	let inferior = 0;
	for (const tramo of tramos) {
		const superior = tramo.hasta === null ? Infinity : tramo.hasta;
		if (base > inferior) {
			const baseTramo = Math.min(base, superior) - inferior;
			cuota += baseTramo * tramo.tipo;
		}
		inferior = superior;
		if (base <= superior) break;
	}
	return cuota;
}

function cuotaConMinimo(base: number, minimo: number, tramos: Tramo[]): number {
	return cuotaProgresiva(base, tramos) - cuotaProgresiva(minimo, tramos);
}

interface BloqueMinimos {
	minimo_contribuyente: { general_euros: number; incremento_mayor_65_euros: number; incremento_adicional_mayor_75_euros: number };
	minimo_por_descendientes_euros: { primero: number; segundo: number; tercero: number; cuarto_y_siguientes: number };
	minimo_por_discapacidad_euros: { grado_igual_o_superior_33_por_ciento: number };
	minimo_por_ascendientes_euros: { general_por_cada_ascendiente: number };
}

function minimoConBloque(input: EntradaSimulador, m: BloqueMinimos): number {
	let total = m.minimo_contribuyente.general_euros;
	if (input.edad >= 65) total += m.minimo_contribuyente.incremento_mayor_65_euros;
	if (input.edad >= 75) total += m.minimo_contribuyente.incremento_adicional_mayor_75_euros;

	const porOrden = [
		m.minimo_por_descendientes_euros.primero,
		m.minimo_por_descendientes_euros.segundo,
		m.minimo_por_descendientes_euros.tercero,
	];
	for (let i = 0; i < input.hijos; i++) {
		total += i < 3 ? porOrden[i] : m.minimo_por_descendientes_euros.cuarto_y_siguientes;
	}

	if (input.discapacidad) total += m.minimo_por_discapacidad_euros.grado_igual_o_superior_33_por_ciento;
	if (input.hijoDiscapacidad) total += m.minimo_por_discapacidad_euros.grado_igual_o_superior_33_por_ciento;
	total += input.ascendientes * m.minimo_por_ascendientes_euros.general_por_cada_ascendiente;

	return total;
}

function minimoEstatal(input: EntradaSimulador): number {
	return minimoConBloque(input, fiscal2025.irpf.minimos_personales_y_familiares as BloqueMinimos);
}

function minimoAutonomico(input: EntradaSimulador, comunidadKey: string): number {
	const bloque = (fiscal2025.irpf as any).minimos_autonomicos?.[comunidadKey];
	if (!bloque || bloque.usa_estatal) return minimoEstatal(input);
	return minimoConBloque(input, bloque as BloqueMinimos);
}

function cotizacionRetaAnual(rendimientoNetoMensual: number): number {
	const tramos = fiscal2025.cotizacion_reta.tramos;
	const base = Math.max(0, rendimientoNetoMensual);
	let tramo = tramos[tramos.length - 1];
	for (const t of tramos) {
		if (t.rendimiento_neto_mensual_hasta === undefined || base <= t.rendimiento_neto_mensual_hasta) {
			tramo = t;
			break;
		}
	}
	const tipoTotal = fiscal2025.cotizacion_reta.tipos_cotizacion_2025.total_aproximado_pct / 100;
	return tramo.base_minima_mensual * tipoTotal * 12;
}

function irpfSobreBaseGeneral(
	baseGeneral: number,
	minimoEstatalValor: number,
	minimoAutonomicoValor: number,
	escalaEstatal: Tramo[],
	escalaAutonomica: Tramo[],
): number {
	const estatal = cuotaConMinimo(baseGeneral, minimoEstatalValor, escalaEstatal);
	const autonomica = cuotaConMinimo(baseGeneral, minimoAutonomicoValor, escalaAutonomica);
	return Math.max(0, estatal + autonomica);
}

function irpfSobreBaseAhorro(baseAhorro: number): number {
	const tramos = fiscal2025.irpf.escala_ahorro.escala_combinada_estatal_mas_autonomico.tramos;
	return Math.max(0, cuotaProgresiva(baseAhorro, tramos));
}

export function comunidadDisponible(comunidad: Comunidad): boolean {
	const key = comunidadAJsonKey[comunidad];
	const entry = (fiscal2025.irpf.escalas_autonomicas_generales as Record<string, any>)[key];
	return !!entry && entry.disponible !== false;
}

export function calcular(input: EntradaSimulador): ResultadoComparacion | null {
	if (!comunidadDisponible(input.comunidad)) return null;

	const escalaEstatal = fiscal2025.irpf.escala_estatal_general.tramos;
	const key = comunidadAJsonKey[input.comunidad];
	const escalaAutonomica = (fiscal2025.irpf.escalas_autonomicas_generales as Record<string, any>)[key].tramos as Tramo[];
	const minimoEst = minimoEstatal(input);
	const minimoAuto = minimoAutonomico(input, key);

	// --- Escenario A: Autónomo ---
	const beneficioPrevio = input.ingresos - input.gastos;
	const cotizacionAutonomo = cotizacionRetaAnual(beneficioPrevio / 12);
	const rendimientoNetoOrientativo = beneficioPrevio - cotizacionAutonomo;
	const { porcentaje: pctDificilJustificacion, limite_anual_euros: limiteDificilJustificacion } =
		fiscal2025.irpf.gastos_dificil_justificacion_estimacion_directa_simplificada;
	const gastosDificilJustificacion = Math.min(
		Math.max(0, rendimientoNetoOrientativo) * pctDificilJustificacion,
		limiteDificilJustificacion,
	);
	const rendimientoNetoReducido = rendimientoNetoOrientativo - gastosDificilJustificacion;
	const baseGeneralAutonomo = Math.max(0, rendimientoNetoReducido) + input.otrosIngresos;
	const irpfAutonomo = irpfSobreBaseGeneral(baseGeneralAutonomo, minimoEst, minimoAuto, escalaEstatal, escalaAutonomica);
	const disponibleAutonomo = input.ingresos - input.gastos - cotizacionAutonomo - irpfAutonomo;

	const autonomo: DesgloseEscenario = {
		beneficioAntesImpuestos: beneficioPrevio,
		cotizaciones: cotizacionAutonomo,
		irpf: irpfAutonomo,
		impuestoSociedades: 0,
		costesAdicionales: 0,
		dineroPersonalDisponible: disponibleAutonomo,
		dineroQuePermaneceEnEmpresa: null,
		cargaTotal: cotizacionAutonomo + irpfAutonomo,
	};

	// --- Escenario B: Sociedad limitada unipersonal ---
	const resultadoPrevio = input.ingresos - input.gastos - input.costesAdicionales;

	let retribucionBruta = 0;
	let dividendosBrutos = 0;
	if (input.retirada === "retribucion") {
		retribucionBruta = input.dineroPersonal;
	} else if (input.retirada === "dividendos") {
		dividendosBrutos = input.dineroPersonal;
	} else {
		retribucionBruta = input.dineroPersonal / 2;
		dividendosBrutos = input.dineroPersonal / 2;
	}

	const cotizacionSocio = cotizacionRetaAnual(retribucionBruta / 12);
	const baseOrientativaSociedad = resultadoPrevio - retribucionBruta;

	const tipoIS = input.tipoReducido === "quince" ? 0.15 : fiscal2025.impuesto_sobre_sociedades.tipo_general_pct / 100;
	const impuestoSociedades = Math.max(0, baseOrientativaSociedad) * tipoIS;
	const beneficioDespuesIS = baseOrientativaSociedad - impuestoSociedades;

	const dividendosEfectivos = Math.max(0, Math.min(dividendosBrutos, beneficioDespuesIS));
	const irpfDividendos = irpfSobreBaseAhorro(dividendosEfectivos);
	const disponibleDividendos = dividendosEfectivos - irpfDividendos;

	const baseGeneralSocio = Math.max(0, retribucionBruta - cotizacionSocio) + input.otrosIngresos;
	const irpfRetribucion = irpfSobreBaseGeneral(baseGeneralSocio, minimoEst, minimoAuto, escalaEstatal, escalaAutonomica);
	const disponibleRetribucion = retribucionBruta - cotizacionSocio - irpfRetribucion;

	const dineroPersonalDisponibleSociedad = disponibleRetribucion + disponibleDividendos;
	const dineroQuePermaneceEnEmpresa = beneficioDespuesIS - dividendosEfectivos;

	const sociedad: DesgloseEscenario = {
		beneficioAntesImpuestos: resultadoPrevio,
		cotizaciones: cotizacionSocio,
		irpf: irpfRetribucion + irpfDividendos,
		impuestoSociedades,
		costesAdicionales: input.costesAdicionales,
		dineroPersonalDisponible: dineroPersonalDisponibleSociedad,
		dineroQuePermaneceEnEmpresa,
		cargaTotal: cotizacionSocio + irpfRetribucion + irpfDividendos + impuestoSociedades + input.costesAdicionales,
	};

	// --- Comparación con margen de prudencia ---
	const margen = fiscal2025.parametros_del_motor_no_fiscales.margen_de_prudencia.valor;
	const diferencia = dineroPersonalDisponibleSociedad - disponibleAutonomo;
	const base = Math.abs(disponibleAutonomo) > 1 ? Math.abs(disponibleAutonomo) : 1;
	const diferenciaPct = diferencia / base;

	let tipoResultado: 1 | 2 | 3;
	let tituloResultado: string;
	let textoResultado: string;

	if (Math.abs(diferenciaPct) < margen) {
		tipoResultado = 3;
		tituloResultado = "No existe una ventaja económica clara";
		textoResultado =
			"Los dos escenarios ofrecen resultados próximos. En este caso, la decisión no debería basarse solo en los impuestos: también hay que valorar costes de gestión, responsabilidad, previsión de crecimiento y necesidades personales.";
	} else if (diferencia > 0) {
		tipoResultado = 2;
		tituloResultado = "La sociedad merece estudiarse";
		textoResultado =
			"Con los datos introducidos, una sociedad merece un estudio más detallado. La diferencia depende especialmente del dinero que necesites retirar y del que pueda permanecer en la empresa.";
	} else {
		tipoResultado = 1;
		tituloResultado = "Conviene estudiar continuar como autónomo";
		textoResultado =
			"Con los datos introducidos, crear una sociedad no muestra una ventaja económica clara. Continuar como autónomo podría ser la opción más sencilla, aunque conviene revisar tu situación completa antes de decidir.";
	}

	const porQue: string[] = [];
	if (input.dineroPersonal >= beneficioPrevio * 0.8) {
		porQue.push("Necesitas retirar la mayor parte del beneficio para uso personal.");
	}
	if (input.costesAdicionales > 0) {
		porQue.push("La sociedad añade costes anuales de gestión.");
	}
	if (dineroQuePermaneceEnEmpresa > 0) {
		porQue.push("Una parte del beneficio podría permanecer dentro de la sociedad.");
	}
	if (input.otrosIngresos > 0) {
		porQue.push("Tus otros ingresos aumentan el tipo marginal del IRPF.");
	}
	if (tipoResultado === 3) {
		porQue.push("La diferencia entre las opciones es demasiado pequeña para obtener una conclusión clara.");
	}

	return {
		comunidadDisponible: true,
		autonomo,
		sociedad,
		diferencia,
		diferenciaPct,
		tipoResultado,
		tituloResultado,
		textoResultado,
		porQue: porQue.slice(0, 3),
	};
}
