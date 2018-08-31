require('./bootstrap');
import Vue from 'vue';
import VueRouter from 'vue-router';
import Vuex from 'vuex';
import NProgress from 'vue-nprogress';
import Element from 'element-ui';
import {initialize} from './helper/general';
import VeeValidate from 'vee-validate';
import VueNumerals from 'vue-numerals';
Vue.use(VueRouter);
Vue.use(Vuex);
Vue.use(NProgress);
Vue.use(Element);
Vue.use(VeeValidate);
Vue.use(VueNumerals);

import {routes} from './routes.js';
import StoreData from './store';

const store = new Vuex.Store(StoreData);

const router = new VueRouter({
    routes
})

initialize(store, router);

const nprogress = new NProgress( {parent: 'body'} );
import MainApp from './components/Main.vue';
const app = new Vue({
    el: '#app',
    router,
    store,
    nprogress,
    components:{ MainApp }
});
