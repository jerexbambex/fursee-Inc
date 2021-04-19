require('./bootstrap');

require('alpinejs');

import Vue from 'vue';
import Example from './components/Example.vue';
// window.Vue = require('vue');

// Vue.component('example-component', require('./components/Example.vue').default);
Vue.component('example-component', require('./components/Example.vue').default);


const app = new Vue({
    el: '#app',
    component: {
        // Example,
    },
    data() {
        return {
            isMenuOpen: false
        };
    }

});