<template>
  <div class="relative min-h-screen flex flex-col bg-white text-slate-800 dark:bg-[rgb(var(--ip-bg,17_24_39))] dark:text-[rgb(var(--ip-text,229_231_235))]">
    <AppHeader />
    <main class="flex-1">
      <slot />
    </main>
    <AppFooter />
  </div>
  
</template>

<script>
import AppHeader from '@/shared/components/sections/AppHeader.vue'
import AppFooter from '@/shared/components/sections/AppFooter.vue'
export default {
  name: 'DefaultLayout',
  components: { AppHeader, AppFooter },
}
</script>
