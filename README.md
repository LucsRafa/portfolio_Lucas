# Portfólio — Lucas Ladislau

Este projeto é o meu portfólio: uma SPA em Vue 3 + PrimeVue e Tailwind, consumindo um endpoint PHP. Aqui apresento quem eu sou, minhas tecnologias e os projetos em que atuei.

## Destaques

- Efeitos de entrada com `AnimateOnScroll` do PrimeVue.
- Chips e ícones (PrimeIcons) para navegação, redes e tags.
- Toolkit principal com `MeterGroup` exibindo minha distribuição tecnológica.
- Conteúdo servido por `api/portfolio.php` (JSON simples de editar).

## Stack

- Vue 3, Vue Router, Pinia
- PrimeVue 4, PrimeIcons, Tailwind CSS
- PHP ≥ 8 para o endpoint

## Como executar

Backend (PHP):
```bash
cd primevue-portfolio
php -S 127.0.0.1:8000 -t api
```

Frontend (Vue):
```bash
npm install
npm run serve
```

Abra `http://localhost:3000`. Para usar outra URL de API, crie `.env.local` e defina `VUE_APP_API_URL`.

## Editar conteúdo

- Dados do portfólio (hero, projetos, tecnologias, links): `primevue-portfolio/api/portfolio.php`.
- Imagens: `primevue-portfolio/public/images/`.

## Estrutura

- `src/app` – boot (plugins, router, pinia)
- `src/features/portfolio` – componentes da página
- `src/shared` – layout/estilos
- `api/` – endpoint PHP

## Build

```bash
npm run build
```
Gera `dist/` para publicação.
