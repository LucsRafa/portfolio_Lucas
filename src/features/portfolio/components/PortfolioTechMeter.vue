<template>
  <section
    class="mx-auto max-w-6xl px-6 pb-16"
    v-animateonscroll="{ enterClass: 'animate-enter fade-up', leaveClass: 'animate-leave fade-up' }"
  >
    <div class="rounded-2xl border border-white/5 bg-white/5 p-6 shadow-lg backdrop-blur-sm">
      <header class="mb-6 flex flex-col gap-2">
        <p class="text-sm uppercase tracking-[0.3em] text-primary">Tecnologias</p>
        <h2 class="font-display text-2xl font-semibold text-white md:text-3xl">Toolkit principal</h2>
        <p class="text-slate-200/70">Distribuição das tecnologias que uso no dia a dia.</p>
      </header>
      <MeterGroup :value="technologies || []" class="mb-6" />
      <ul class="grid gap-3 md:grid-cols-2">
        <li
          v-for="tech in technologies || []"
          :key="tech.label"
          v-animateonscroll="{ enterClass: 'animate-enter fade-up', leaveClass: 'animate-leave fade-up' }"
          class="flex items-center justify-between rounded-xl border border-white/5 bg-white/5 px-4 py-3"
        >
          <div class="flex items-center gap-3">
            <span class="flex h-10 w-10 items-center justify-center rounded-full bg-primary/10 text-xl text-primary">
              <i class="pi" :class="tech.icon"></i>
            </span>
            <div class="flex flex-col">
              <span class="font-medium text-white">{{ tech.label }}</span>
              <span class="text-sm text-slate-200/70">{{ tech.description }}</span>
            </div>
          </div>
          <span class="text-lg font-semibold text-primary">{{ tech.value }}%</span>
        </li>
      </ul>
    </div>
  </section>
</template>

<script setup>
  defineProps({
    technologies: {
      type: Array,
      default: () => [],
    },
  });
</script>
