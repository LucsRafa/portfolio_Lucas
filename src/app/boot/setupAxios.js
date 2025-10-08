import httpClient from '@/infrastructure/http/httpClient.js';

/**
 * Configura o cliente HTTP para a aplicação.
 *
 * @param {import('vue').App} app - A instância da aplicação Vue.
 */
export default function setupHttp(app) {
  app.provide('httpClient', httpClient);
}