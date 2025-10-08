import router from '@/infrastructure/router';

/**
 * Configura e instala o Vue Router na aplicação.
 *
 * @param {import('vue').App} app - A instância da aplicação Vue.
 */
export default function setupRouter(app) {
  app.use(router);
}