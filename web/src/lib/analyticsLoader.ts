// Punto único para cargar Google Analytics cuando exista consentimiento de la categoría "Analíticas".

declare global {
	interface Window {
		dataLayer?: unknown[][];
	}
}

const GA_MEASUREMENT_ID = "G-E54L8999TP";

let loaded = false;

export function loadAnalyticsIfConsented(hasConsent: boolean): void {
	if (!hasConsent || loaded || !GA_MEASUREMENT_ID) return;
	loaded = true;

	const script = document.createElement("script");
	script.src = `https://www.googletagmanager.com/gtag/js?id=${GA_MEASUREMENT_ID}`;
	script.async = true;
	document.head.appendChild(script);
	window.dataLayer = window.dataLayer || [];
	function gtag(...args: unknown[]) {
		window.dataLayer!.push(args);
	}
	gtag("js", new Date());
	gtag("config", GA_MEASUREMENT_ID, { anonymize_ip: true });
}
