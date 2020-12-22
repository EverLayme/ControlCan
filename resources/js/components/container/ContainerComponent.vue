<template>
<div class="content">
    <preloader/>
    <home-component/>
</div>

</template>
<script>
import Preloader from '../container/Preloader.vue'
import HomeComponent from '../container/HomeComponent.vue'
export default {
name: 'maincontainer',
components:{
    Preloader,HomeComponent
}
}
</script>
<style scoped>

</style>
