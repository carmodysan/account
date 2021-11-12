import Vue from 'vue';
import App from './components/App';
import router from './router';
import store from './store';
import vuetify from './plugins/vuetify';
import axios from 'axios';

Vue.config.productionTip = false
axios.defaults.baseURL = 'http://127.0.0.1:8000/api'

new Vue({
    router,
    store,
    vuetify,
    render: h => h(App)
}).$mount('#root')