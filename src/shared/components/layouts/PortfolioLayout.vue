<template>
  <div class="relative min-h-screen overflow-hidden bg-surface-0 text-slate-100">
    <div class="pointer-events-none absolute inset-0 bg-[radial-gradient(circle_at_top,_rgba(6,182,212,0.18),_transparent_55%)]"></div>
    <div class="relative z-10 flex min-h-screen flex-col">
      <slot name="header" />
      <main class="flex-1">
        <slot />
      </main>
      <slot name="footer" />
    </div>
  </div>
</template>

<script setup>
</script>
