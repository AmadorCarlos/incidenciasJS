
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */
// window.moment = require('moment');

require('./bootstrap');

var VueResource = require('vue-resource');
Vue.use(VueResource);
import {ServerTable, ClientTable, Event} from 'vue-tables-2';
Vue.use(ClientTable, {}, false);

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
    data:{
        ready:false,
        data:[]
    },
    mounted(){
        let vm = this;
        if(Laravel.dpto_id!=null){
            setInterval(function(){
                vm.reloadData();
            },2000);
        }
        
        $(document).ready(function(){
            vm.ready=true;
        });
    },
    methods:{
        reloadData(){
            let vm=this;
            vm.$http.get('/getData/'+Laravel.dpto_id,{csrfToken:Laravel.csrfToken}).then((response)=>{
                console.log(response);
                vm.data=response.data;
            },(response)=>{
                console.log(response);
            });
        }
    }
});

