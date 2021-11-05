// assets/js/app.js
import Vue from 'vue';
import vuetify from './plugins/vuetify';
import Home from './components/Home';
import MenuDesktop from './components/MenuDesktop.vue';
import MenuMobile from './components/MenuMobile';

/**
* Create a fresh Vue Application instance
*/
new Vue({
    vuetify,
    el: '#app',
    components: {
        Home, 
        'menu-desktop': MenuDesktop, 
        'menu-mobile': MenuMobile
    }
});