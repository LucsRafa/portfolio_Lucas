import { createApp } from 'vue';
import App from '@/app/App.vue';

import setupAxios from './setupAxios.js';
import setupPinia from './setupPinia.js';
import setupPlugins from './setupPlugins.js';
import setupRouter from './setupRouter.js';

export async function boot() {
  const app = createApp(App);

  setupPinia(app);
  setupRouter(app);
  setupAxios(app);
  setupPlugins(app);

  app.mount('#app');
}
