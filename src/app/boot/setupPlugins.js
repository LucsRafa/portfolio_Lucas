import setupPrimeVue from '@/plugins/setupPrimeVue';
import ParallaxDirective from '@/plugins/parallaxDirective';

export default function setupPlugins(app) {
  setupPrimeVue(app);
  app.directive('parallax', ParallaxDirective);
}
