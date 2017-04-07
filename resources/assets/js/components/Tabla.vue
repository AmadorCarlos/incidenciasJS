<template>
    <div class="">
        <!-- <table class="table table-hover table-striped">
            <thead>
                <tr>
                    <th>Incidencia</th>
                    <th>
                        <select v-model="filterTipo">
                            <option value="all">Tipo</option>
                            <option value="Mayor">Mayores</option>
                            <option value="Menor">Menores</option>
                            <option value="Sin">Sin Prioridad</option>
                        </select>
                    </th>
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
                <tr v-for="row in data" v-if="showRow(row)">
                    <td>{{row.incidencia}}</td>
                    <td>{{row.tipo}}</td>
                    <td>{{row.departamento}}</td>
                    <td>{{row.municipio}}</td>
                    <td>{{row.descripcion}}</td>
                    <td>{{timelocal(row.created_at)}}</td>
                </tr>
            </tbody>
        </table> -->
        <slot></slot>
    </div>
</template>

<script>
    export default {
        mounted() {
            let vm=this;
            // console.log('Component Tabla')
            // if (this.reloadUri){
            //     setInterval(function(){
            //         vm.reloadData();
            //     },2000);
            // }
        }
    }
</script>
