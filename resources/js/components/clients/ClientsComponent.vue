<template>
<section>
<material-transition-group tag="div" class="row">
<client-card-component :key="client.id" :data-index="index" v-bind:client="client" v-for="(client,index) in clients">
</client-card-component>
</material-transition-group>
</section>

</template>

<script>
import MaterialCollectionComponent from '../animations/MaterialCollectionComponent.vue';
export default {
  components: { MaterialCollectionComponent },
data(){
    return{
        name: 'Clients Component v2',
        clients:[],
        endpoint: "/clientes"
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
