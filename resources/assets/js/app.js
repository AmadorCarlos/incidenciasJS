
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
    	tableOptions:{
            listColumns:{
              tipo: [{id:"Mayor", text:'Incidencia Mayor'}, {id:"Menor", text:'Incidencia Menor'}, {id:"Sin", text:'Sin Prioridad'} ],
              departamento_id:[{"id": 1, "text": "RACN" }, {"id": 2, "text": "RACS" }, {"id": 3, "text": "Boaco" }, {"id": 4, "text": "Carazo" }, {"id": 5, "text": "Chinandega" }, {"id": 6, "text": "Chontales" }, {"id": 7, "text": "Estel\u00ed" }, {"id": 8, "text": "Granada" }, {"id": 9, "text": "Jinotega" }, {"id": 10, "text": "Le\u00f3n" }, {"id": 11, "text": "Madriz" }, {"id": 12, "text": "Managua" }, {"id": 13, "text": "Masaya" }, {"id": 14, "text": "Matagalpa" }, {"id": 15, "text": "Nueva Segovia" }, {"id": 16, "text": "R\u00edo San Juan" }, {"id": 17, "text": "Rivas" }, {"id": 18, "text": "Triangulo Minero" }, {"id": 19, "text": "Zelaya Central" }],
              muni_id:[{"id": 1, "text": "Bilwi", }, {"id": 2, "text": "Waslala", }, {"id": 3, "text": "Wasp\u00e1n", }, {"id": 4, "text": "Bluefields", }, {"id": 5, "text": "Corn Island", }, {"id": 6, "text": "Desembocadura de R\u00edo Grande", }, {"id": 7, "text": "El Ayote", }, {"id": 8, "text": "El Tortuguero", }, {"id": 9, "text": "Kukra Hill", }, {"id": 10, "text": "La Cruz de R\u00edo Grande", }, {"id": 11, "text": "Laguna de Perlas", }, {"id": 12, "text": "Paiwas", }, {"id": 13, "text": "Boaco", }, {"id": 14, "text": "Camoapa", }, {"id": 15, "text": "San Lorenzo", }, {"id": 16, "text": "San Jos\u00e9 de Los Remates", }, {"id": 17, "text": "Santa Luc\u00eda", }, {"id": 18, "text": "Teustepe", }, {"id": 19, "text": "Diriamba", }, {"id": 20, "text": "Dolores", }, {"id": 21, "text": "El Rosario", }, {"id": 22, "text": "Jinotepe", }, {"id": 23, "text": "La Conquista", }, {"id": 24, "text": "La Paz de Oriente", }, {"id": 25, "text": "San Marcos", }, {"id": 26, "text": "Santa Teresa", }, {"id": 27, "text": "Chichigalpa", }, {"id": 28, "text": "Chinandega", }, {"id": 29, "text": "Cinco Pinos", }, {"id": 30, "text": "Corinto", }, {"id": 31, "text": "El Realejo", }, {"id": 32, "text": "El Viejo", }, {"id": 33, "text": "Posoltega", }, {"id": 34, "text": "San Francisco del Norte", }, {"id": 35, "text": "San Pedro del Norte", }, {"id": 36, "text": "Santo Tom\u00e1s del Norte", }, {"id": 37, "text": "Somotillo", }, {"id": 38, "text": "Puerto Moraz\u00e1n", }, {"id": 39, "text": "Villanueva", }, {"id": 40, "text": "Acoyapa", }, {"id": 41, "text": "Comalapa", }, {"id": 42, "text": "San Francisco de Cuapa", }, {"id": 43, "text": "El Coral", }, {"id": 44, "text": "Juigalpa", }, {"id": 45, "text": "La Libertad", }, {"id": 46, "text": "San Pedro de L\u00f3vago", }, {"id": 47, "text": "Santo Domingo", }, {"id": 48, "text": "Santo Tom\u00e1s", }, {"id": 49, "text": "Villa Sandino", }, {"id": 50, "text": "Condega", }, {"id": 51, "text": "Estel\u00ed", }, {"id": 52, "text": "La Trinidad", }, {"id": 53, "text": "Pueblo Nuevo", }, {"id": 54, "text": "San Juan de Limay", }, {"id": 55, "text": "San Nicol\u00e1s", }, {"id": 56, "text": "Diri\u00e1", }, {"id": 57, "text": "Diriomo", }, {"id": 58, "text": "Granada", }, {"id": 59, "text": "Nandaime", }, {"id": 60, "text": "El Cu\u00e1", }, {"id": 61, "text": "Jinotega", }, {"id": 62, "text": "La Concordia", }, {"id": 63, "text": "San Jos\u00e9 de Bocay", }, {"id": 64, "text": "San Rafael del Norte", }, {"id": 65, "text": "San Sebasti\u00e1n de Yal\u00ed", }, {"id": 66, "text": "Santa Mar\u00eda de Pantasma", }, {"id": 67, "text": "Wiwil\u00ed", }, {"id": 68, "text": "Acuapa", }, {"id": 69, "text": "El Jicaral", }, {"id": 70, "text": "El Sauce", }, {"id": 71, "text": "La Paz Centro", }, {"id": 72, "text": "Larreynaga", }, {"id": 73, "text": "Le\u00f3n", }, {"id": 74, "text": "Nagarote", }, {"id": 75, "text": "Quezalguaque", }, {"id": 76, "text": "Santa Rosa del Pe\u00f1\u00f3n", }, {"id": 77, "text": "Telica", }, {"id": 78, "text": "Las Sabanas", }, {"id": 79, "text": "Palacag\u00fcina", }, {"id": 80, "text": "San Jos\u00e9 de Cusmapa", }, {"id": 81, "text": "San Juan de R\u00edo Coco", }, {"id": 82, "text": "San Lucas", }, {"id": 83, "text": "Somoto", }, {"id": 84, "text": "Telpaneca", }, {"id": 85, "text": "Totogalpa", }, {"id": 86, "text": "Yalag\u00fcina", }, {"id": 87, "text": "Ciudad Sandino", }, {"id": 88, "text": "El Crucero", }, {"id": 89, "text": "Distrito I", }, {"id": 90, "text": "Distrito II", }, {"id": 91, "text": "Distrito III", }, {"id": 92, "text": "Distrito VI", }, {"id": 93, "text": "Distrito V", }, {"id": 94, "text": "Distrito VI", }, {"id": 95, "text": "Distrito VII", }, {"id": 96, "text": "Mateare", }, {"id": 97, "text": "San Francisco Libre", }, {"id": 98, "text": "San Rafael del Sur", }, {"id": 99, "text": "Ticuantepe", }, {"id": 100, "text": "Tipitapa", }, {"id": 101, "text": "Villa El Carmen", }, {"id": 102, "text": "Catarina", }, {"id": 103, "text": "La Concepci\u00f3n", }, {"id": 104, "text": "Masatepe", }, {"id": 105, "text": "Masaya", }, {"id": 106, "text": "Nandasmo", }, {"id": 107, "text": "Nindir\u00ed", }, {"id": 108, "text": "Niquinohomo", }, {"id": 109, "text": "San Juan de Oriente", }, {"id": 110, "text": "Tisma", }, {"id": 111, "text": "Ciudad Dar\u00edo", }, {"id": 112, "text": "El Tuma - La Dalia", }, {"id": 113, "text": "Esquipulas", }, {"id": 114, "text": "Matagalpa", }, {"id": 115, "text": "Matigu\u00e1s", }, {"id": 116, "text": "Muy Muy", }, {"id": 117, "text": "Rancho Grande", }, {"id": 118, "text": "R\u00edo Blanco", }, {"id": 119, "text": "San Dionisio", }, {"id": 120, "text": "San Isidro", }, {"id": 121, "text": "San Ram\u00f3n", }, {"id": 122, "text": "S\u00e9baco", }, {"id": 123, "text": "Terrabona", }, {"id": 124, "text": "Ciudad Antigua", }, {"id": 125, "text": "Dipilto", }, {"id": 126, "text": "El J\u00edcaro", }, {"id": 127, "text": "G\u00fcig\u00fcil\u00ed", }, {"id": 128, "text": "Jalapa", }, {"id": 129, "text": "Macuelizo", }, {"id": 130, "text": "Mozonte", }, {"id": 131, "text": "Murra", }, {"id": 132, "text": "Ocotal", }, {"id": 133, "text": "Quilal\u00ed", }, {"id": 134, "text": "San Fernando", }, {"id": 135, "text": "Santa Mar\u00eda", }, {"id": 136, "text": "El Almendro", }, {"id": 137, "text": "El Castillo", }, {"id": 138, "text": "Morrito", }, {"id": 139, "text": "San Carlos", }, {"id": 140, "text": "San Juan del Norte", }, {"id": 141, "text": "San Miguelito", }, {"id": 142, "text": "Altagracia", }, {"id": 143, "text": "Bel\u00e9n", }, {"id": 144, "text": "Buenos Aires", }, {"id": 145, "text": "C\u00e1rdenas", }, {"id": 146, "text": "Moyogalpa", }, {"id": 147, "text": "Potos\u00ed", }, {"id": 148, "text": "Rivas", }, {"id": 149, "text": "San Jorge", }, {"id": 150, "text": "San Juan del Sur", }, {"id": 151, "text": "Tola", }, {"id": 152, "text": "Bocana de Paiwas", }, {"id": 153, "text": "Bonanza", }, {"id": 154, "text": "Mulukuku", }, {"id": 155, "text": "Prinzapolka", }, {"id": 156, "text": "Rosita", }, {"id": 157, "text": "Siuna", }, {"id": 158, "text": "El Coral", }, {"id": 159, "text": "El Rama", }, {"id": 160, "text": "Muelle de los Bueyes", }, {"id": 161, "text": "Nueva Guinea", }]
            },
            dateColumns:["created_at"],
            dateFormat:"DD-MM-YYYY hh:mm a",
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
