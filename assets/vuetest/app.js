// assets/js/app.js
import Vue from 'vue';
import App from "./App";
import vuetify from './plugins/vuetify';
import router from './router'
import Home from './components/Home';
import MenuDesktop from './components/MenuDesktop.vue';
import MenuMobile from './components/MenuMobile';
import Error404 from './components/errors/404';
import ErrorWeb from './components/errors/Error';

/**
* Create a fresh Vue Application instance
*/
new Vue({
    components: { App },
    template: "<App/>",
    router,
    vuetify
  }).$mount("#app");