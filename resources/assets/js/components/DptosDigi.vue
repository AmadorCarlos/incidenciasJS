<template>
    <div>
        <div class="form-group">
            <label for="departamento">Departamento</label>
            <select name="departamento_id" class="form-control" v-model='selectedDpto' :disabled="dptoDisable">
                <option value="nulo" disabled selected>Seleccione el Departamento Asignado</option>
                <option v-for="dpto in dptos" :value="dpto.id">{{dpto.nombre}}</option>
            </select>
        </div>
        <div class="form-group" v-if="selectedDpto!='nulo'">
            <label for="departamento">Municipio</label>
            <select name="muni_id" class="form-control">
                <option value="nulo" disabled selected>Seleccione el Departamento Asignado</option>
                <option v-for="muni in dptos[Number(selectedDpto)-1].municipios" :value="muni.id">{{muni.nombre}}</option>
            </select>
        </div>
    </div>
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        },
        props:{
            selectedDpto:{
                type:Number,
                default:1,
                required:false
            },
            dptoDisable:{
                type:Boolean,
                default:false,
                required:false
            }
        },
        data() {
            return {
                dptos:Laravel.dptos,
            }
        }
    }
</script>
