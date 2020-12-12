<template>
    <div  class="col-xs-12 col-sm-10 col-md-4">
    <div class="card">
    <header class="bg-success card padding">Cliente: {{client.id}}
    </header>
    <div class="card-body padding">
         <h2 class="card-subtitle">Nombre_Cliente:</h2>
         <h2 class="card-subtitle text-center">{{client.name}}</h2>
            <div class="dropdown-divider"></div>
         <h4 class="card-subtitle">Dirección:</h4>
         <h4 class="card-subtitle">{{client.direction}}</h4>
         <div class="dropdown-divider"></div>
         <h5 class="card-text">Teléfono/Celular: {{client.fono}}</h5>
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
