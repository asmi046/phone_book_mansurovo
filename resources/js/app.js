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
      search_str: ''
    },

    mutations: {
        setAbonentList (state, value) {
            state.abonent_list = value
        },

        setSearchStr (state, value) {
            state.search_str = value
        },


    },

    getters: {
        abonentList: state => {
          return state.abonent_list
        },

        setSearchStr: state => {
          return state.search_str
        },
    },

    actions: {

        initialBascet(context, value) {
                axios.get('/get_abonent', {
                    params: {
                      search: context.state.search_str
                    }
                  })
                .then((response) => {
                    console.log(response.data)
                    context.commit('setAbonentList', response.data.abonents)
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
