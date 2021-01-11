/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

import Vue from 'vue';
import routes from './router/router';
// window.$ = window.jQuery = require('jquery');
import jQuery from 'jquery'
global.jQuery = jQuery
global.$ =jQuery
require('./bootstrap');

window.axios = require('axios');

import ScrollFixedHeader from 'vuejs-scroll-fixed-header';
Vue.use(ScrollFixedHeader);

import ImageMagnifier from 'vue-image-magnifier';
Vue.use(ImageMagnifier);

import VueMeta from 'vue-meta'
 
Vue.use(VueMeta, {
  // optional pluginOptions
  refreshOnceOnNavigation: true
})

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))


// import AppHeader from './components/includes/Header.vue';
// Vue.component('app-header', AppHeader);

// import Slider from './components/slider/Slider.vue';
// Vue.component('slider', Slider);
/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app',
    router: routes,
});
