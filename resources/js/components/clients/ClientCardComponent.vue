<template>
    <div  class="col-xs-12 col-sm-10 col-md-4">
    <div class="card">
    <header class="bg-success card padding">Cliente:{{client.id}}</header>
    <div class="card-body padding">
         <h3 class="card-subtitle">Nombre Cliente:</h3>
         <h3 class="card-subtitle text-center">{{client.name}}</h3>
            <div class="dropdown-divider"></div>
         <h4 class="card-subtitle">Dirección:</h4>
         <h4 class="card-subtitle">{{client.direction}}</h4>
            <div class="dropdown-divider"></div>
         <h5 class="card-text">Teléfono/Celular: {{client.fono}}</h5>
    <a class="btn btn-success" v-bind:href="'/clientes/'+client.id">Editar Cliente</a>
    </div>
    </div>
    </div>
</template>
<script>
export default {
   props:{
       client: {
           type: Object
       }
   }
}
</script>>
