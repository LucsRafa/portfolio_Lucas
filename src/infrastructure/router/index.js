import { createRouter, createWebHistory } from 'vue-router';

const routes = [
  {
    path: '/',
    name: 'Portfolio',
    component: () => import('@/features/portfolio/views/PortfolioView.vue'),
    meta: { title: 'Portfólio' },
  },
  {
    path: '/:pathMatch(.*)*',
    name: 'NotFound',
    component: () => import('@/features/common/views/NotFoundView.vue'),
    meta: { title: 'Página não encontrada' },
  },
];

const router = createRouter({
  history: createWebHistory(),
  routes,
});

router.afterEach((to) => {
  const baseTitle = 'Portfólio | Lucas Ladislau';
  document.title = to.meta?.title
    ? to.meta.title + ' • ' + baseTitle
    : baseTitle;
});

export default router;
