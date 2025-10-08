<template>
  <header class="mx-auto flex max-w-6xl flex-wrap items-center justify-between gap-4 px-6 py-8">
    <div class="flex items-center gap-3 text-primary">
      <span class="text-3xl">👨🏾‍💻</span>
      <span class="font-display text-2xl font-semibold tracking-tight">{{ logo }}</span>
    </div>
    <nav class="flex flex-wrap justify-end gap-3">
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
          class="!bg-surface-100/40 !text-slate-100 hover:!bg-primary hover:!text-primary-contrast transition-colors"
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
    </nav>
  </header>
</template>

<script setup>
  defineProps({
    logo: {
      type: String,
      default: '',
    },
    navigation: {
      type: Array,
      default: () => [],
    },
  });
</script>
