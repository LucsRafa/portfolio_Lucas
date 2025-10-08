import { createPinia } from 'pinia';

export default function setupPinia(app) {
  const pinia = createPinia();
  app.use(pinia);
}
