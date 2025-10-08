/* eslint-disable vue/multi-word-component-names */
import PrimeVue from 'primevue/config';
import Aura from '@primevue/themes/aura';
import AnimateOnScroll from 'primevue/animateonscroll';
import Chip from 'primevue/chip';
import MeterGroup from 'primevue/metergroup';

export default function setupPrimeVue(app) {
  app.use(PrimeVue, {
    theme: {
      preset: Aura,
      options: {
        darkModeSelector: 'html',
      },
    },
  });

  app.directive('animateonscroll', AnimateOnScroll);
  app.component('Chip', Chip);
  app.component('MeterGroup', MeterGroup);
}
