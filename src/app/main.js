import 'primeicons/primeicons.css';
import '@/shared/styles/tailwind.css';
import { initTheme } from '@/shared/styles/theme/themeManager.js';

(async () => {
  // Initialize theme before app mounts to avoid FOUC
  try {
    // Tema padrão: escuro (visual original)
    initTheme('dark');
  } catch (err) {
    // Ignora indisponibilidade de storage/DOM no bootstrap
    void err;
  }
  const { boot } = await import('./boot');
  await boot();
})();
