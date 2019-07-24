import Vue from 'vue'
import Vuetify from 'vuetify'
import theme from './theme'
import 'vuetify/dist/vuetify.min.css'
import '@mdi/font/css/materialdesignicons.css'


const opts = {
  iconfont: 'mdi',
  theme
}


Vue.use(Vuetify, opts)

