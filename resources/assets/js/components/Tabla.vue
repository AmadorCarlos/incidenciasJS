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
                </tr>
            </thead>
            <tbody v-if="!data.length">
                <tr>
                    <td colspan="5" class="">No hay Inicidencias</td>
                </tr>
            </tbody>
            <tbody v-if='data.length>0'>
                <tr v-for="row in data">
                    <td>{{row.incidencia}}</td>
                    <td>{{row.tipo}}</td>
                    <td>{{getName('departamento',row.departamento_id)}}</td>
                    <td>{{getName('municipio',row.muni_id)}}</td>
                    <td>{{row.descripcion}}</td>
                </tr>
            </tbody>
        </table>
    </div>
</template>

<script>
    export default {
        mounted() {
            console.log('Component Tabla')
        },
        props:{
            data:{
                type:Array,
                default(){return [{
                    incidencia:"prueba01",
                    tipo:"Mayor",
                    departamento_id:12,
                    muni_id:97,
                    descripcion:"Esto solo es una prueba"
                }]},
                required:false
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
    }
</script>
