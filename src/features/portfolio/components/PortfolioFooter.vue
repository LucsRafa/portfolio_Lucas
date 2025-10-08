<template>
  <footer class="mx-auto max-w-6xl px-6 pb-12">
    <div class="mt-12 border-t border-white/10 pt-6 text-center text-sm text-slate-400">
      {{ footer.text }}
    </div>
  </footer>
</template>

<script setup>
  defineProps({
    footer: {
      type: Object,
      default: () => ({ text: '' }),
    },
  });
</script>
