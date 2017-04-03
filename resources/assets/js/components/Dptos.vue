<template>
    <div>
        <div class="form-group">
            <label for="departamento" class="col-md-4 control-label">Departamento</label>
            <div class="col-md-6">
                <select name="departamento_id" class="form-control" v-model='selectedDpto'>
                    <option value="nulo" disabled selected>Seleccione el Departamento Asignado</option>
                    <option v-for="dpto in dptos" :value="dpto.id">{{dpto.nombre}}</option>
                </select>
            </div>
        </div>
        <div class="form-group" v-if="selectedDpto!='nulo'">
            <label for="departamento" class="col-md-4 control-label">Municipio</label>
            <div class="col-md-6">
                <select name="departamento_id" class="form-control">
                    <option value="nulo" disabled selected>Seleccione el Departamento Asignado</option>
                    <option v-for="muni in dptos[Number(selectedDpto)-1].municipios" :value="muni.id">{{muni.nombre}}</option>
                </select>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        },
        data() {
            return {
                dptos:Laravel.dptos,
                selectedDpto:"nulo"
            }
        }
    }
</script>
