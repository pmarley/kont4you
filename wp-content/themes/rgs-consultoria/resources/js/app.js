require('./bootstrap');

import jQuery from 'jquery';
window.$ = window.jQuery = jQuery;

import 'popper.js';
import 'bootstrap';

import menu from './partials/menu';
($ => {
    $(() => {
        // Jquery Functions
        menu();
    });
})(jQuery);

import Vue from 'vue';

Vue.component('example', require('./components/Example.vue').default);

const app = new Vue({
    el: '#app'
});
