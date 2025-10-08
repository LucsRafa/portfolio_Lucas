<template>
  <section id="projects" class="mx-auto max-w-6xl px-6 py-12">
    <header class="mb-8 flex flex-col gap-3">
      <p class="text-sm uppercase tracking-[0.3em] text-primary">Projetos</p>
      <h2 class="font-display text-3xl font-semibold text-white md:text-4xl">
        Destaques recentes
      </h2>
      <p class="max-w-2xl text-base text-slate-200/80">
        Alguns projetos que desenvolvi recentemente e que contam um pouco da minha jornada como desenvolvedor PHP full stack.
      </p>
    </header>

    <div class="flex flex-col gap-8">
      <article
        v-for="project in projects"
        :key="project.id"
        v-animateonscroll="{ enterClass: 'animate-enter fade-up', leaveClass: 'animate-leave fade-up' }"
        class="flex flex-col gap-6 rounded-2xl border border-white/5 bg-white/5 p-6 shadow-lg backdrop-blur-sm transition hover:border-primary/60 hover:shadow-glow md:flex-row"
      >
        <div class="md:w-1/3">
          <div class="overflow-hidden rounded-xl">
            <img :src="project.image" :alt="project.title" class="h-52 w-full object-cover transition duration-500 hover:scale-105" />
          </div>
        </div>
        <div class="flex flex-1 flex-col justify-center gap-4">
          <div class="flex flex-col gap-2">
            <div class="flex flex-wrap items-center gap-2 text-sm text-slate-300/70">
              <span class="flex items-center gap-1">
                <i class="pi" :class="project.status.icon"></i>
                {{ project.status.label }}
              </span>
              <span>•</span>
              <span>{{ project.year }}</span>
            </div>
            <h3 class="font-display text-2xl font-semibold text-white">{{ project.title }}</h3>
            <p class="text-base leading-relaxed text-slate-200/80">{{ project.description }}</p>
          </div>

          <div class="flex flex-wrap gap-2">
            <Chip
              v-for="tag in project.tags"
              :key="tag.label"
              :label="tag.label"
              :icon="tag.icon"
              class="!bg-primary/10 !text-primary hover:!bg-primary hover:!text-primary-contrast transition-colors"
            />
          </div>

          <div v-if="project.links?.length" class="flex flex-wrap gap-4 pt-2">
            <a
              v-for="link in project.links"
              :key="link.label"
              :href="link.href"
              class="flex items-center gap-2 text-sm font-medium text-primary hover:text-white"
              target="_blank"
              rel="noopener noreferrer"
            >
              <i class="pi" :class="link.icon"></i>
              <span>{{ link.label }}</span>
            </a>
          </div>
        </div>
      </article>
    </div>
  </section>
</template>

<script setup>
  defineProps({
    projects: {
      type: Array,
      default: () => [],
    },
  });
</script>
