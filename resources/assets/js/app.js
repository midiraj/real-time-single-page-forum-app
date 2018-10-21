
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

import Vue from 'vue'
import Vuetify from 'vuetify'
 
Vue.use(Vuetify)

import User from './Helpers/User'
window.User = User

window.EventBus = new Vue()
// console.log(User.loggedIn())

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('AppHome', require('./components/AppHome.vue'));
Vue.component('Toolbar', require('./components/Toolbar.vue'));
Vue.component('AppFooter', require('./components/AppFooter.vue'));

import router from './Router/router.js'
const app = new Vue({
    el: '#app',
    router
});
