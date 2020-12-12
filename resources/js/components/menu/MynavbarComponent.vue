<template>
<nav class="options navbar navbar-expand-md navbar-light">
    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
        <span class="dropdown-toggle">Menu</span>
    </button>

    <div class="select collapse navbar-collapse justify-content-left" id="navbarCollapse">
        <div class="navbar-nav">
            <a href="#" class="nav-item nav-link active">INICIO</a>
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Edición</a>
                <div class="dropdown-menu text-center">
                      <a href="/clientes/create" class="dropdown-item nav-link">Adición Cliente</a>
                      <div class="dropdown-divider"></div>
                      <a href="/clientes/" class="dropdown-item nav-link">Actualizar Cliente</a>
                      <div class="dropdown-divider"></div>
                      <a href="/clientes/" class="dropdown-item nav-link">Eliminar Cliente</a>
                </div>
            </div>
            <a href="/clientes/" class="nav-item nav-link">Reportes</a>
              <a href="#" class="nav-item nav-link">Ayuda</a>
                <a href="#" class="nav-item nav-link">Acerca de ...</a>
        </div>
    </div>
</nav>
</template>
<script>
export default {
    name:'mynavbarcomponent'
}
</script>
<style scoped>
.select{
    background-color: rgba(26, 157, 167, 0.8);
    box-shadow: 0px 1px 4px rgba(0,0,0,0.5);
    padding-left: 5%;
}
.options{
    margin-top: -7px;
    margin-left: -1em;
    margin-right: -1em;
}
.options button{
border: 1px solid #14acf3;
}
div a{
    font-weight: bold;
    font-family: Helvetica, sans-serif;
    text-shadow: 0px 2px rgba(180, 222, 255, 0.5);

}
</style>
