
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */
// window.moment = require('moment');

require('./bootstrap');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */


Vue.component('example', require('./components/Example.vue'));
Vue.component('dptosMunis',require('./components/Dptos.vue'));
Vue.component('dptosMunisDigi',require('./components/DptosDigi.vue'));
Vue.component('tabla',require('./components/Tabla.vue'));
Vue.component('mapa',require('./components/mapa.vue'));

const app = new Vue({
    el: '#app',
});
