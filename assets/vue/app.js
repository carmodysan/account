// assets/js/app.js
import Vue from 'vue';
import vuetify from './plugins/vuetify';
import Home from './components/Home';
import MenuDesktop from './components/MenuDesktop.vue';
import MenuMobile from './components/MenuMobile';
import Error404 from './components/errors/404';
import ErrorWeb from './components/errors/Error';

/**
* Create a fresh Vue Application instance
*/
new Vue({
    vuetify,
    el: '#app',
    components: {
        Home, 
        'menu-desktop': MenuDesktop, 
        'menu-mobile': MenuMobile,
        'error-404': Error404,
        'error': ErrorWeb
    }
});