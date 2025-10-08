<template>
  <div class="min-h-screen bg-[rgb(var(--ip-bg,17_24_39))] text-[rgb(var(--ip-text,229_231_235))] flex flex-col">
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
  components: { AppHeader, AppFooter }
}
</script>