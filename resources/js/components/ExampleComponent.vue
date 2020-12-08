<template>
<div class="container">
   <!-- navegador -->
    <nav class="navbar navbar-light bg-light navbar-expand-lg sticky-top mr-auto">
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item">
              <a class="nav-link" href="/" id="btn-home">Inicio</a>
            </li>
            <li class="nav-item">
              <a class="nav-link white" href="/clientes/create" id="btn-clients">Clientes</a>
            </li>
            <li class="nav-item">
              <a class="nav-link white" href="/clientes/" id="btn-reports">Reporte</a>
            </li>
            <li class="nav-item">
              <a class="nav-link white" href="#help" id="btn-help">Ayuda</a>
            </li>
             <li class="nav-item">
              <a class="nav-link white" href="#about" id="btn-about">Acerca de...</a>
            </li>
          </ul>
        </div>
      </nav>
</div>
</template>

<style scoped>
 .container{
     margin-top:-1%;
      font-size: 1.6vw;
      font-weight: bold;
      font-family: cursive;
 }
 a:hover{
     border-radius:6px;
    background:rgba(36, 178, 197, 0.8);
    padding-left: 10px;
   box-shadow: 0px 6px 6px rgba(0,0,0,0.5);
 }
</style>
