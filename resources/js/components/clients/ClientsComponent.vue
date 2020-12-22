<template>

<section class="container">
<div class="list bg-info row text-center">
     <p class="col-sm-1 col-md-1 col-lg-1">ID</p>
     <p class="col-sm-2 col-md-2 col-lg-2">NOMBRE</p>
     <p class="col-sm-4 col-md-3 col-lg-4">DIRECCION</p>
     <p class="col-sm-3 col-md-4 col-lg-3">TELEFONO/CEL.</p>
     <p class="col-sm-2 col-md-1 col-lg-1">OP.</p>
</div>
<material-transition-group>
<client-card-component :key="client.id" :data-index="index" v-bind:client="client" v-for="(client,index) in clients">
</client-card-component>
</material-transition-group>
</section>

</template>

<script>
import MaterialCollectionComponent from '../animations/MaterialCollectionComponent.vue';
import ContainerComponent from '../container/ContainerComponent.vue';
export default {
  components: { MaterialCollectionComponent, ContainerComponent },
data(){
    return{
        name: 'Clients Component v2',
        clients:[],
        endpoint: "/clientes",
        enableSearch: true
    }
  },
  created(){
      this.fetchClients();
  },
  methods:{
      fetchClients(){
          axios.get(this.endpoint).then((response)=>{
              console.log(response.data.data);
              this.clients = response.data.data;
          });
      }
  }
}
</script>
<style scoped>
.list{
padding: -1em;
margin-top: -1.3em;
font-size: 0.8em;
}
p{
    font-weight: bold;
}
</style>
