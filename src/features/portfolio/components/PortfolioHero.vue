<template>
  <section class="mx-auto flex max-w-6xl flex-col items-start gap-12 px-6 py-12 md:flex-row">
    <div class="flex flex-col gap-6 md:w-2/3" v-parallax="{ speed: 12, reverse: true }">
      <div class="space-y-3">
        <p class="text-sm uppercase tracking-[0.3em] text-primary" v-animateonscroll="{ enterClass: 'animate-enter blur-up', leaveClass: 'animate-leave fade-up' }">{{ hero.greeting }}</p>
        <h1
          class="font-display text-4xl font-semibold leading-tight text-slate-900 dark:text-white md:text-5xl"
          v-animateonscroll="{ enterClass: 'animate-enter fade-up', leaveClass: 'animate-leave fade-up' }"
          :style="{ '--a-delay': '80ms' }"
        >
          {{ hero.title }}
        </h1>
        <p
          v-for="(paragraph, index) in hero.description || []"
          :key="index"
          class="text-base leading-relaxed text-slate-700 dark:text-slate-200/90"
          v-animateonscroll="{ enterClass: 'animate-enter fade-up', leaveClass: 'animate-leave fade-up' }"
          :style="{ '--a-delay': 120 + index * 60 + 'ms' }"
        >
          {{ paragraph }}
        </p>
      </div>
      <ul v-if="hero.activities?.length" class="grid gap-2 text-slate-700 dark:text-slate-200/80">
        <li v-for="item in hero.activities" :key="item" class="flex items-start gap-2">
          <i class="pi pi-check-circle mt-1 text-primary"></i>
          <span>{{ item }}</span>
        </li>
      </ul>
      <!-- Social buttons section removed by request to keep only header buttons -->
    </div>
    <div class="order-first flex w-full justify-center md:order-none md:w-1/3 md:self-start">
      <div
        class="relative h-64 w-64 overflow-hidden rounded-full border border-primary/40 shadow-glow"
        v-parallax="{ speed: 36 }"
        v-animateonscroll="{ enterClass: 'animate-enter zoom-in', leaveClass: 'animate-leave zoom-in' }"
        :style="{ '--a-duration': '900ms' }"
      >
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
