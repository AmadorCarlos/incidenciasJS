
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
        data:[],
        options:{
            texts:{
                count:'Mostrando {from} al {to} de {count} Registros|{count} Registros|Un Registro',
                filter:'Búsqueda: ',
                filterPlaceholder:'filtro',
                limit:'Registros:',
                noResults:'No hay resultados',
                page:'Página:', // for dropdown pagination 
                filterBy: '{column}', // Placeholder for search fields when filtering by column
                loading:'Cargando...', // First request to server
                defaultOption:'Selecciona {column}' // default option for list filters
            },
            // dateColumns:["fecha"],
            // dateFormat:"DD-MM-YYYY",
            perPage: 5,
            perPageValues: [5, 25, 50, 100],
            filterByColumn: true,
            datepickerOptions: {
                autoUpdateInput:true,
                showDropdowns: true,
                locale:{cancelLabel:"Limpiar",applyLabel:"Buscar"},
                multidate:false
            },
            sortable: ['tipo','departamento','municipio','fecha'],
            filterable: ['tipo','departamento','municipio','fecha']  
        }
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
            vm.$http.get('/getDptos/'+Laravel.dpto_id,{csrfToken:Laravel.csrfToken}).then((response)=>{
                // console.log(response);
                vm.data=response.data;
            },(response)=>{
                console.log(response);
            });
        }
    }
});

