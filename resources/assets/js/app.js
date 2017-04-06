
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */
// window.moment = require('moment');

require('./bootstrap');

var VueResource = require('vue-resource');
import {ServerTable, ClientTable, Event} from 'vue-tables-2';
Vue.use(VueResource);
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
    	tableOptions:{
            listColumns:{
              tipo: [{id:"Mayor", text:'Incidencia Mayor'}, {id:"Menor", text:'Incidencia Menor'}, {id:"Sin", text:'Sin Prioridad'} ],
              departamento_id:[{"id": 1, "text": "RACN" }, {"id": 2, "text": "RACS" }, {"id": 3, "text": "Boaco" }, {"id": 4, "text": "Carazo" }, {"id": 5, "text": "Chinandega" }, {"id": 6, "text": "Chontales" }, {"id": 7, "text": "Estel\u00ed" }, {"id": 8, "text": "Granada" }, {"id": 9, "text": "Jinotega" }, {"id": 10, "text": "Le\u00f3n" }, {"id": 11, "text": "Madriz" }, {"id": 12, "text": "Managua" }, {"id": 13, "text": "Masaya" }, {"id": 14, "text": "Matagalpa" }, {"id": 15, "text": "Nueva Segovia" }, {"id": 16, "text": "R\u00edo San Juan" }, {"id": 17, "text": "Rivas" }, {"id": 18, "text": "Triangulo Minero" }, {"id": 19, "text": "Zelaya Central" }],
            },
            dateColumns:["created_at"],
            dateFormat:"DD-MM-YYYY <hh:m></hh:m>m a",
            sortable:['tipo','departamento_id','muni_id','created_at'],
            filterable:['tipo','departamento_id','muni_id','created_at'],
			texts:{
				count:'Mostrando del {from} al {to} de {count} registros | {count} Registros| Un Registro',
				filter:'Filtrar por:',
				filterPlaceholder:'Búsqueda',
				limit:'Registros:',
				noResults:'No hay registros',
				page:'Página:', // for dropdown pagination 
				filterBy: 'Filtrado por {column}', // Placeholder for search fields when filtering by column
				loading:'cargando...', // First request to server
				defaultOption:'Selecciona {column}' // default option for list filters
			},
			filterByColumn:true,
			compileTemplates: true
        }
    },
    ready(){
    	let vm = this;
    	$(document).ready(function(){
    		vm.ready=true;
    	});
    },
    methods:{
    	getName(item,idx){
                if (item == 'departamento'){
                    for (let depa of Laravel.dptos){
                        if (depa.id == idx){
                            return depa.nombre;
                        }
                    }
                }else{
                    for (let depa of Laravel.dptos){
                        for (let muni of depa.municipios){
                            if (muni.id == idx){
                                return muni.nombre;
                            }
                        }
                    }
                }
            }
    }
});
