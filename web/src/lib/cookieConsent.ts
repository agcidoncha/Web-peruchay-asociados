export interface ConsentState {
	version: string;
	necessary: true;
	analytics: boolean;
	updatedAt: string;
}

const STORAGE_KEY = "pya_cookie_consent";
export const CONSENT_VERSION = "1";
export const CONSENT_UPDATED_EVENT = "cookie-consent-updated";
export const OPEN_SETTINGS_EVENT = "open-cookie-settings";

export function getConsent(): ConsentState | null {
	try {
		const raw = localStorage.getItem(STORAGE_KEY);
		if (!raw) return null;
		const parsed = JSON.parse(raw) as ConsentState;
		if (parsed.version !== CONSENT_VERSION) return null;
		return parsed;
	} catch {
		return null;
	}
}

export function saveConsent(categories: { analytics: boolean }): ConsentState {
	const state: ConsentState = {
		version: CONSENT_VERSION,
		necessary: true,
		analytics: categories.analytics,
		updatedAt: new Date().toISOString(),
	};
	try {
		localStorage.setItem(STORAGE_KEY, JSON.stringify(state));
	} catch {
		/* localStorage no disponible: la elección no se recordará entre visitas */
	}
	window.dispatchEvent(new CustomEvent(CONSENT_UPDATED_EVENT, { detail: state }));
	return state;
}

export function needsConsent(): boolean {
	return getConsent() === null;
}

export function hasAnalyticsConsent(): boolean {
	return getConsent()?.analytics === true;
}
