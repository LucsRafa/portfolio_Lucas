// Minimal theme manager for light/dark/system
const STORAGE_KEY = 'theme';

function setDarkClass(isDark) {
  const root = document.documentElement;
  // Tailwind uses `dark` class; PrimeVue's Aura reads darkMode via selector
  root.classList.toggle('dark', !!isDark);
}

function resolveSystemPref() {
  try {
    return window.matchMedia && window.matchMedia('(prefers-color-scheme: dark)').matches;
  } catch (_) {
    return false;
  }
}

export function applyTheme(theme) {
  const mode = theme || 'light';

  if (mode === 'system') {
    setDarkClass(resolveSystemPref());
  } else {
    setDarkClass(mode === 'dark');
  }

  // Persist choice
  try {
    localStorage.setItem(STORAGE_KEY, mode);
  } catch (err) {
    // Fallback: ignore storage errors (e.g., privacy mode)
    // console.debug('applyTheme: storage unavailable', err)
    void err;
  }

  // React to system changes when in system mode
  try {
    if (mode === 'system' && window.matchMedia) {
      const mq = window.matchMedia('(prefers-color-scheme: dark)');
      const handler = (e) => setDarkClass(e.matches);
      // Remove previous listener if exists
      if (applyTheme._mq) {
        applyTheme._mq.removeEventListener?.('change', applyTheme._handler);
      }
      mq.addEventListener?.('change', handler);
      applyTheme._mq = mq;
      applyTheme._handler = handler;
    }
  } catch (err) {
    // Best-effort: if matchMedia not available, just skip listeners
    void err;
  }
}

export function initTheme(defaultTheme = 'light') {
  let saved = null;
  try {
    saved = localStorage.getItem(STORAGE_KEY);
  } catch (err) {
    void err;
  }
  applyTheme(saved || defaultTheme);
}

export function toggleTheme() {
  const isDark = document.documentElement.classList.contains('dark');
  applyTheme(isDark ? 'light' : 'dark');
}
