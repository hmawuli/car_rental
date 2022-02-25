require('./bootstrap');

import Vue from 'vue'
import { createInertiaApp, plugin } from '@inertiajs/inertia-vue'
import { InertiaProgress } from '@inertiajs/progress'
import { vue } from 'laravel-mix';
 vue.use(plugin);
InertiaProgress.init()


createInertiaApp({
  resolve: name => require(`./Pages/${name}.vue`),
  setup({ el, App, props, plugin }) {
    Vue.use(plugin)

    new Vue({
      render: h => h(App, props),
    }).$mount(el)
  },
})
