import '@mdi/font/css/materialdesignicons.css'
import Vue from 'vue'
import Vuetify from 'vuetify/lib'

Vue.use(Vuetify)

const opts = {
    theme: {
        dark: true,
    },
    icons: {
        iconfont: 'mdi',
    },
}

export default new Vuetify(opts)
