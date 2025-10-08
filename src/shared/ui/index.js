/**
 * Shared UI plugin exposed via Module Federation.
 * Loads global styles (Tailwind, tokens), registers layout components,
 * and applies the initial theme.
 */
import 'primeicons/primeicons.css';
import '@/shared/styles/tailwind.css';

import DefaultLayout from './layouts/DefaultLayout.vue';
import { applyTheme } from '@/shared/styles/theme/themeManager.js';

export function installUi(app, opts = {}) {
  try {
    applyTheme(opts.theme || 'light');
  } catch (e) {
    console.warn('[installUi] applyTheme failed:', e);
  }
  app.component('DefaultLayout', DefaultLayout);
}

export { DefaultLayout, applyTheme };