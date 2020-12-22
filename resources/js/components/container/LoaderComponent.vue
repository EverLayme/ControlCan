<template>
<div class="page-loader" v-if="!isloaded">
    <div class="cube"></div>
    <div class="cube"></div>
    <div class="cube"></div>
    <div class="cube"></div>
    </div>
</template>
<script>
export default {
data:() =>{
    return{
        isloaded:false
    }
},
mounted(){
    document.onreadystatechange = ()=>{
        if(document.readyState="complete"){
            this.isloaded =true;
        }
    }
}
}
</script>
<style lang="scss" scoped>
$color:#0e205a,#1d48a5,#4170f1,#adadad;
.page-loader{
    display: flex;
    justify-content: center;
    align-items: center;
    position:fixed;
    top: 0;
    left: 0;
    width: 100vw;
    height: 100vh;
    z-index: 999;
}
.cube{
width: 15px;
height: 15px;
margin-right: 10px;
@for $i from 1 through length($color){
&:nth-child(#{$i}){
background-color: nth($color, $i );
        }
    }
&:first-child{
    animation: left 1s infinite;
    }
&:last-child{
    animation: right 1s infinite 0.5s;
    }

}
@keyframes left {
    40%{
transform: translateX(-60px);
        }
          50%{
transform: translateX(0);
        }
}
@keyframes right{
    40%{
transform: translateX(60px);
        }
          50%{
transform: translateX(0);
        }
}
</style>
