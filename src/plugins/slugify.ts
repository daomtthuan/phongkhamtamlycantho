import Vue from 'vue';
import Slugify from 'slugify';

declare module 'vue/types/vue' {
  interface Vue {
    $slug(text: string): string;
  }
}

Vue.prototype.$slug = (text: string) =>
  Slugify(text, {
    replacement: '-',
    lower: true,
    locale: 'vi',
  });
