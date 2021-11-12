import Vue from 'vue'
import Vuetify from 'vuetify'
import 'vuetify/dist/vuetify.min.css'
import FEIcon from '../components/icons/FEIcon.vue'

Vue.use(Vuetify)

const opts = {
    icons: {
        values: {
            feicon: {
                component: FEIcon,
            }
        }
    }
}

export default new Vuetify(opts)