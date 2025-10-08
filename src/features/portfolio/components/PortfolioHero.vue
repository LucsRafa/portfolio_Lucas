<template>
  <section class="mx-auto flex max-w-6xl flex-col items-start gap-12 px-6 py-12 md:flex-row">
    <div class="flex flex-col gap-6 md:w-2/3">
      <div class="space-y-3">
        <p class="text-sm uppercase tracking-[0.3em] text-primary">{{ hero.greeting }}</p>
        <h1 class="font-display text-4xl font-semibold leading-tight text-white md:text-5xl">
          {{ hero.title }}
        </h1>
        <p
          v-for="(paragraph, index) in hero.description || []"
          :key="index"
          class="text-base leading-relaxed text-slate-200/90"
        >
          {{ paragraph }}
        </p>
      </div>
      <ul v-if="hero.activities?.length" class="grid gap-2 text-slate-200/80">
        <li v-for="item in hero.activities" :key="item" class="flex items-start gap-2">
          <i class="pi pi-check-circle mt-1 text-primary"></i>
          <span>{{ item }}</span>
        </li>
      </ul>
      <div v-if="hero.social?.length" class="flex flex-wrap gap-3">
        <a
          v-for="item in hero.social"
          :key="item.label"
          :href="item.href"
          class="no-underline"
          target="_blank"
          rel="noopener noreferrer"
        >
          <Chip
            :label="item.label"
            :icon="item.icon"
            class="!bg-primary/10 !text-slate-100 hover:!bg-primary hover:!text-primary-contrast transition-colors"
          />
        </a>
      </div>
    </div>
    <div class="flex w-full justify-center md:w-1/3">
      <div class="relative h-64 w-64 overflow-hidden rounded-full border border-primary/40 shadow-glow">
        <img
          :src="hero.avatar?.src"
          :alt="hero.avatar?.alt"
          class="h-full w-full object-cover"
        />
        <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent"></div>
      </div>
    </div>
  </section>
</template>

<script setup>
  defineProps({
    hero: {
      type: Object,
      default: () => ({}),
    },
  });
</script>
