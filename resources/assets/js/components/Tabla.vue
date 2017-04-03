<template>
    <div class="container">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>Incidencia</th>
                    <th>Tipo</th>
                    <th>Departamento</th>
                    <th>Municipio</th>
                    <th>Descripción</th>
                </tr>
            </thead>
            <tbody>
                <tr colspan="5">No hay incidencias</tr>
            </tbody>
        </table>
    </div>
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
