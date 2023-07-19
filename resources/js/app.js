import './bootstrap';

import {createApp} from 'vue/dist/vue.esm-bundler';

import searchElement from './components/searchElement.vue'
import tableComponent from './components/tableComponent.vue'

import axios from 'axios'

import VueAxios from 'vue-axios'

const global_app = createApp({
    components:{
        searchElement,
        tableComponent
    }
})

global_app.use(VueAxios, axios)
global_app.mount("#global_app");
