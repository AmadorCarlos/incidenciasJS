<template>
    <div>
        <div class="form-group">
            <label for="departamento">Departamento</label>
            <select required :name="dptoDisable ? 'ninguno' : 'departamento_id'" class="form-control" v-model='selectedDpto' :disabled="dptoDisable">
                <option value="0" disabled>Seleccione el Departamento Asignado</option>
                <option v-for="dpto in dptos" :value="dpto.id">{{dpto.nombre}}</option>
            </select>
            <input type="hidden" name="departamento_id" v-if="dptoDisable" :value="selectedDpto">
        </div>
        <div class="form-group" v-if="selectedDpto!=0">
            <label for="departamento">Municipio</label>
            <select required name="muni_id" class="form-control">
                <option value="" disabled selected>Seleccione el Municipio Asignado</option>
                <option v-for="muni in dptos[Number(selectedDpto)-1].municipios" :value="muni.id">{{muni.nombre}}</option>
            </select>
        </div>
    </div>
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.');
        },
        ready(){
            while(typeof(parsley) != "object"){
                setTimeout(function(){
                    $('#mainForm').parsley();
                },200);
            }
        },
        props:{
            selectedDpto:{
                type:Number,
                default:0,
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
