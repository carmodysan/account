import Vue from 'vue';
import App from './components/App';
import router from './router';
import store from './store';
import vuetify from './plugins/vuetify';
import axios from 'axios';

Vue.config.productionTip = false
axios.defaults.baseURL = process.env.BASE_URL_API

new Vue({
    router,
    store,
    vuetify,
    render: h => h(App)
}).$mount('#root')