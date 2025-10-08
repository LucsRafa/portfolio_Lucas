const { defineConfig } = require('@vue/cli-service');

module.exports = defineConfig({
  publicPath: './',
  pages: {
    index: {
      entry: 'src/app/main.js',
    },
  },
  devServer: {
    port: 3000,
    historyApiFallback: true,
  },
});
