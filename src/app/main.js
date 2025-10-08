import 'primeicons/primeicons.css';
import '@/shared/styles/tailwind.css';

(async () => {
  const { boot } = await import('./boot');
  await boot();
})();
