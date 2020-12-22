<template>
<div class="content">
<div class="card">
    <header class="bg-info text-center"><b>PET GROOMMING</b></header>
        <div clas="car-body padding">
         <div class="intro row">
            <div class="imagen col"></div>
            <div class="descripcion col">
             <p><b>El Pet groomming es un servicio
             que ofrecen Veterinarias asi como peluquerias Caninas.</b></p>
            </div>
         </div>
            <div class="footer"></div>
        </div>
</div>
</div>
</template>
<script>
export default {
name: 'home'
}
</script>
<style scoped>
.content{
margin-top:-2em;
justify-content: center;
position: absolute;
width:100%;
height: 75%;
background: linear-gradient(rgb(202, 227, 255),rgb(237, 243, 255));
}
header{
    color:rgb(190, 205, 233);
    background: linear-gradient(to left,rgb(62, 86, 114),rgb(105, 136, 199));
    font-size:1.5em;
}
.intro{
    width: 100%;
    height: 400px;
    margin-left: 0;
    padding-right: -1rem;
    background: linear-gradient(to bottom,rgb(62, 86, 114),rgb(219, 227, 245));
}
.imagen{
        background: url('img/images.jpg');
        background-repeat:no-repeat;
        background-size: 250px auto;
    }
.descripcion{
    width: 50%;
        font-size:1rem;
}
</style>
