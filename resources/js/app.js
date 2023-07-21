import './bootstrap';

import { createStore } from 'vuex'

import {createApp} from 'vue/dist/vue.esm-bundler';

import searchElement from './components/searchElement.vue'
import tableComponent from './components/tableComponent.vue'

import axios from 'axios'

import VueAxios from 'vue-axios'


const store = new createStore({
    state: {
      abonent_list: {},
    },

    mutations: {
        setAbonentList (state, value) {
            state.abonent_list = value
        },
    },

    getters: {
        abonentList: state => {
          return state.abonent_list
        },
    },

    actions: {

        initialBascet(context, value) {
                axios.get('/get_abonent')
                .then((response) => {
                    console.log(response.data)
                    context.commit('setAbonentList', response.data)
                })
                .catch(error => console.log(error));
        },
      }
  })

const global_app = createApp({
    components:{
        searchElement,
        tableComponent
    },
    beforeCreate() {
        this.$store.dispatch('initialBascet');
    }
})

global_app.use(store)
global_app.use(VueAxios, axios)
global_app.mount("#global_app");
