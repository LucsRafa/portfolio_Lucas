<template>
  <section class="flex min-h-screen flex-col items-center justify-center gap-4 bg-surface-0 text-surface-900">
    <span class="text-6xl font-semibold">404</span>
    <p class="text-lg">Página não encontrada.</p>
    <RouterLink to="/" class="text-primary font-medium">Voltar para o início</RouterLink>
  </section>
</template>

<script setup>
  import { RouterLink } from 'vue-router';
</script>
