require('./bootstrap');

import jQuery from 'jquery';
window.$ = window.jQuery = jQuery;

import 'popper.js';
import 'bootstrap';

import './partials/menu'
($ => {
    $(() => {
        // Jquery Functions
        menu();
    });
})(jQuery);

import Vue from 'vue';
import menu from './partials/menu';

Vue.component('example', require('./components/Example.vue').default);

const app = new Vue({
    el: '#app'
});
