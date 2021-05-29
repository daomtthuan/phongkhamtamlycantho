import Dotenv from 'dotenv';
import NuxtTypes from '@nuxt/types';

Dotenv.config();

export default <NuxtTypes.NuxtConfig>{
  dev: process.env.NODE_ENV,

  head: {
    titleTemplate: title => (title ? `Phòng khám Tâm lý Cần Thơ - ${title}` : 'Phòng khám Tâm lý Cần Thơ'),
    htmlAttrs: {
      lang: 'vi'
    },
    meta: [
      { charset: 'utf-8' },
      { name: 'viewport', content: 'width=device-width, initial-scale=1' },
      { hid: 'description', name: 'description', content: 'Website Phòng khám Tâm lý Cần Thơ' },
      { name: 'keywords', content: 'phongkhamtamlycantho, website phòng khám tâm lý cần thơ, tâm lý, bác sĩ tâm lý, khám tâm lý cần thơ, phòng khám tâm lý' },
      { name: 'author', content: 'Daomtthuan' }
    ],
    link: [{ rel: 'icon', type: 'image/x-icon', href: '/favicon.ico' }]
  },

  css: ['~/assets/styles/theme/index.scss'],

  plugins: ['~/plugins/slugify'],

  components: [{ path: '~/components/shared/', prefix: 'shared' }],

  modules: ['bootstrap-vue/nuxt', '@nuxtjs/pwa'],
  bootstrapVue: { icons: false, bootstrapCSS: false, bootstrapVueCSS: false },
  pwa: { manifest: { lang: 'vi' } },

  buildModules: ['@nuxt/typescript-build', '@nuxtjs/fontawesome'],
  fontawesome: { component: 'fa', suffix: true },

  build: {
    babel: { compact: true }
  },
  router: {
    extendRoutes(routes, resolve) {
      routes.push({
        name: 'index',
        path: '/',
        component: resolve(__dirname, 'pages/trang-chu.vue')
      });
    }
  },
  telemetry: false
};
