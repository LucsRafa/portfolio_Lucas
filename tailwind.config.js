module.exports = {
  darkMode: 'class',
  content: ['./index.html', './src/**/*.{vue,js,ts,jsx,tsx}'],
  theme: {
    extend: {
      colors: {
        primary: '#06b6d4',
        'primary-contrast': '#0f172a',
        'surface-0': '#020617',
        'surface-50': '#0f172a',
        'surface-100': '#1e293b',
        'surface-200': '#334155',
        'surface-300': '#475569',
        'surface-400': '#64748b',
        'surface-500': '#94a3b8',
        'surface-600': '#cbd5f5',
      },
      fontFamily: {
        sans: ['Inter', 'sans-serif'],
        display: ['Poppins', 'Inter', 'sans-serif'],
      },
      boxShadow: {
        glow: '0 0 50px rgba(6, 182, 212, 0.2)',
      },
    },
  },
  plugins: [],
};
