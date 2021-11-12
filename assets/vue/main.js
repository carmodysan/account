import Vue from 'vue';
import App from './components/App';
import router from './router';
import store from './store/index';
import vuetify from './plugins/vuetify';
import axios from 'axios';

Vue.config.productionTip = false
axios.defaults.baseURL = process.env.BASE_URL_API

require('./store/subscriber')

store.dispatch('auth/attempt', localStorage.getItem('token')).then(() => {
    new Vue({
        router,
        store,
        vuetify,
        render: h => h(App)
    }).$mount('#root')
})
