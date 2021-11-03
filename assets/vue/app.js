// assets/js/app.js
import Vue from 'vue';
import vuetify from './plugins/vuetify';
import Home from './components/Home';

/**
* Create a fresh Vue Application instance
*/
new Vue({
    vuetify,
    el: '#app',
    components: {Home}
});