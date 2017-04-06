<template>
    <div class="">
        <table class="table table-hover table-striped">
            <thead>
                <tr>
                    <th>Incidencia</th>
                    <th>Tipo</th>
                    <th>Departamento</th>
                    <th>Municipio</th>
                    <th>Descripción</th>
                    <th>Fecha y Hora</th>
                </tr>
            </thead>
            <tbody v-if="!data.length">
                <tr>
                    <td colspan="6" class="">No hay Inicidencias</td>
                </tr>
            </tbody>
            <tbody v-if='data.length>0'>
                <tr v-for="row in data">
                    <td>{{row.incidencia}}</td>
                    <td>{{row.tipo}}</td>
                    <td>{{getNameTable('departamento',row.departamento_id)}}</td>
                    <td>{{getNameTable('municipio',row.muni_id)}}</td>
                    <td>{{row.descripcion}}</td>
                    <td>{{timelocal(row.created_at)}}</td>
                </tr>
            </tbody>
        </table>
        <slot></slot>
    </div>
</template>

<script>
    export default {
        mounted() {
            let vm=this;
            console.log('Component Tabla')
            if (this.reloadUri){
                setInterval(function(){
                    vm.reloadData();
                },2000);
            }
        },
        props:{
            dataIn:{
                type:Array,
                default(){return []},
                required:false
            },
            reloadUri:{
                type:Boolean,
                default:false,
                required:false
            },
            alcance:{
                type:String,
                default:'',
                required:false
            },
            departamento_id:{
                type:Number,
                default:0,
                required:false
            }
        },
        data(){
            return {
                data:this.dataIn
            }
        },
        methods:{
            getNameTable(item,idx){
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
            },
            timelocal(fecha){
                return moment.utc(fecha,'YYYY-MM-DD hh:mm:ss a').local().format("DD-MM-YYYY hh:mm:ss a");
            },
            reloadData(){
                let vm=this;
                vm.$http.get('/getData/'+vm.departamento_id,{csrfToken:Laravel.csrfToken}).then((response)=>{
                    console.log(response);
                    vm.data=response.data;
                },(response)=>{
                    console.log(response);
                });
            }

        }
    }
</script>
