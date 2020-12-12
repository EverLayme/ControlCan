<template>
<section>
<div class="row">
<client-card-component v-bind:client="client" v-for="client in clients">
</client-card-component>
</div>
</section>

</template>

<script>
export default {
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
</script>>
<style scoped>

</style>
