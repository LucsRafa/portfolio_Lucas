<template>
  <header class="mx-auto flex max-w-6xl flex-wrap items-center justify-between gap-4 px-6 py-8">
    <div class="flex items-center gap-3 text-primary">
      <span class="text-3xl">👨🏾‍💻</span>
      <span class="font-display text-2xl font-semibold tracking-tight">{{ logo }}</span>
    </div>
    <nav class="flex flex-wrap items-center justify-end gap-3">
      <a
        v-for="item in navigation"
        :key="item.label"
        :href="item.href"
        :target="item.external ? '_blank' : undefined"
        :rel="item.external ? 'noopener noreferrer' : undefined"
        class="no-underline"
      >
        <Chip
          :label="item.label"
          :icon="item.icon"
          :removable="item.removable"
          class="!bg-slate-200 !text-slate-800 hover:!bg-primary/90 hover:!text-white transition-colors dark:!bg-surface-100/40 dark:!text-slate-100 dark:hover:!bg-primary dark:hover:!text-primary-contrast"
        >
          <template v-if="item.removable" #removeicon="{ keydownCallback }">
            <i
              :class="['pi', item.removeIcon || 'pi-minus-circle']"
              class="cursor-pointer"
              tabindex="0"
              @click.stop
              @keydown="keydownCallback"
            />
          </template>
        </Chip>
      </a>

      <!-- Theme toggle button -->
      <button
        type="button"
        class="inline-flex h-10 w-10 items-center justify-center rounded-full border border-slate-300 bg-white/80 text-slate-700 shadow-sm backdrop-blur hover:bg-slate-100 hover:text-slate-900 transition dark:border-white/30 dark:bg-white/10 dark:text-slate-200 dark:hover:bg-primary dark:hover:text-primary-contrast dark:hover:border-primary"
        aria-label="Alternar tema"
        @click="onToggleTheme"
        :title="isDark ? 'Tema claro' : 'Tema escuro'"
      >
        <i :class="['pi', isDark ? 'pi-sun text-yellow-400' : 'pi-moon text-sky-300']" />
      </button>
    </nav>
  </header>
</template>

<script setup>
  import { ref, onMounted } from 'vue'
  import { toggleTheme as doToggleTheme } from '@/shared/styles/theme/themeManager.js'

  defineProps({
    logo: { type: String, default: '' },
    navigation: { type: Array, default: () => [] },
  })

  const isDark = ref(false)

  onMounted(() => {
    isDark.value = document.documentElement.classList.contains('dark')
  })

  function onToggleTheme() {
    doToggleTheme()
    isDark.value = document.documentElement.classList.contains('dark')
  }
</script>
