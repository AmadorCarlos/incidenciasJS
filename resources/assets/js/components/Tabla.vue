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
            <tbody v-if='data.length'>
                <tr>
                    <td>{{data.incidencia}}</td>
                    <td>{{data.tipo}}</td>
                    <td>{{getName('departamento',data.departamento_id)}}</td>
                    <td>{{getName('municipio',data.muni_id)}}</td>
                    <td>{{data.descripcion}}</td>
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
                default(){return []},
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
