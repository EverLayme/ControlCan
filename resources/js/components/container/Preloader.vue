<template>
 <transition name="fade">
    <div v-if="show" class="preloader">
        <div class="logo">  </div>
        <p>Bienvenido a ControlCan...</p>
        <div class="circles">
            <div class="circle"></div>
            <div class="circle"></div>
            <div class="circle"></div>
            <div class="circle"></div>
            <div class="circle"></div>

        </div>
    </div>
 </transition>
</template>
<script>
export default {
name:'preloader',
data(){
    return{
        show:true
    }
  },
  mounted()
  {
this.showToggle()
  },
  methods:{
      showToggle(){
          setTimeout(()=>{
            this.show=false
           },1000)
      }
  }
}

</script>

<style lang="scss" scoped>
$color:#41a2f1;
.preloader{
display: flex;
flex-direction: column;
align-items: center;
justify-content: center;
position: absolute;
width: 100%;
height: 50%;
z-index: 999;
}
p{
    font-size: 1.5rem;
    font-weight: bold;
    margin-top: 1rem;
    animation-name: scaleOut;
    animation-duration: 3s;
}
.logo{
        width: 100px;
        height: 100px;
        background: url('img/logo.jpg');
        background-repeat:no-repeat;
        background-size: 100px auto;
        border-radius: 50px;
        box-shadow: 2px 1px skyblue;
        animation-name: scaleIn;
        animation-duration: 3s;
}
.circles{
    display: flex;
    margin-top:1rem;
}
.circle{
    width: 1.5rem;
    height: 1.5rem;
    margin:0.5rem;
    background-color:$color;
    border-radius: 50%;
    animation-name: scaleIn;
    animation-duration: 3s;
    transform: scale(0);
    &:nth-child(1){
        animation-delay: 0s;
    }
    &:nth-child(2){
        animation-delay: 0.1s;
    }
    &:nth-child(3){
        animation-delay: 0.2s;
    }
    &:nth-child(4){
        animation-delay: 0.3s;
    }
    &:nth-child(5){
        animation-delay: 0.4s;
    }
 }


.fade-enter-active, .fade-leave-active{
    transition: opacity 1s;
}
.fade-enter, .fade-leave-to{
    opacity: 0;
}
@keyframes scaleOut{
    0%{
transform: scale(0);
        }
          100%{
transform: scale(1);
        }
}
@keyframes scaleIn{
    0%{
transform: scale(1);
        }
          100%{
transform: scale(0);
        }
}
</style>
