<template>
  <PortfolioLayout>
    <template #header>
      <PortfolioHeader
        v-if="portfolio.header"
        :logo="portfolio.header.logo"
        :navigation="portfolio.header.navigation"
      />
    </template>

    <div v-if="loading" class="flex min-h-[60vh] items-center justify-center">
      <span class="text-slate-200/80">Carregando portfólio…</span>
    </div>

    <div v-else-if="error" class="flex min-h-[60vh] items-center justify-center">
      <p class="max-w-md rounded-xl border border-red-500/40 bg-red-500/10 px-6 py-4 text-center text-red-200">
        {{ error }}
      </p>
    </div>

    <template v-else>
      <PortfolioHero :hero="portfolio.hero" />
      <PortfolioProjects :projects="portfolio.projects" />
      <PortfolioTechMeter :technologies="portfolio.technologies" />
    </template>

    <template #footer>
      <PortfolioFooter v-if="portfolio.footer" :footer="portfolio.footer" />
    </template>
  </PortfolioLayout>
</template>

<script setup>
  import { onMounted, ref } from 'vue';
  import PortfolioLayout from '@/shared/components/layouts/PortfolioLayout.vue';
  import PortfolioHeader from '../components/PortfolioHeader.vue';
  import PortfolioHero from '../components/PortfolioHero.vue';
  import PortfolioProjects from '../components/PortfolioProjects.vue';
  import PortfolioTechMeter from '../components/PortfolioTechMeter.vue';
  import PortfolioFooter from '../components/PortfolioFooter.vue';
  import { fetchPortfolio } from '../services/portfolioService.js';

  const portfolio = ref({});
  const loading = ref(true);
  const error = ref(null);

  onMounted(async () => {
    try {
      const data = await fetchPortfolio();
      portfolio.value = data;
    } catch (err) {
      console.error(err);
      error.value = 'Não foi possível carregar as informações no momento. Tente novamente em instantes.';
    } finally {
      loading.value = false;
    }
  });
</script>
