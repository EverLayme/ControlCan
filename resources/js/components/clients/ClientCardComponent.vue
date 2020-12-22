<template>
    <div class="cont row border border-top-0">
         <p class="col-sm-1">{{client.id}}</p>
         <p class="a col-sm-2 text-center">{{client.name}}</p>
         <p class="col-sm-4 ">{{client.direction}}</p>
         <p class="b col-sm-3 text-center">{{client.fono}}</p>
        <a class="col-sm-2 nav-link dropdown-toggle text-center" v-bind:href="'/clientes/'+client.id">Detalles</a>
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
</script>
<style scoped>
.a, .b{
    background:#ededed;
    margin-bottom:0.1em;
}
</style>
