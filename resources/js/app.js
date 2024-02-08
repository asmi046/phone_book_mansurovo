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
      organization_list: [],
      search_str: '',
      organization: '',
    },

    mutations: {
        setAbonentList (state, value) {
            state.abonent_list = value
        },

        setOrganizationList (state, value) {
            state.organization_list = value
        },

        setSearchStr (state, value) {
            state.search_str = value
        },

        setOrganization (state, value) {
            state.organization = value
        },


    },

    getters: {
        getOrganizationList: state => {
            return state.organization_list;
        },

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
                      search: context.state.search_str,
                      organization: context.state.organization,
                    }
                  })
                .then((response) => {
                    console.log(response.data)
                    context.commit('setAbonentList', response.data.abonents)
                    context.commit('setOrganizationList', response.data.organization)
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
