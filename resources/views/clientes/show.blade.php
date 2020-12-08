@extends('layouts.app')

@section('content')
<div class="row justify-content-sm-center">
    <div class="col-xs-12 col-sm-10 col-md-7 col-lg-6">
       <div class="card">
         <header class="padding text-center bg-primary">
          <h1>Informacion del Cliente</h1>
         </header>
         <div class="card-body padding">
          <h2 class="card-title">{{$client->name}}</h2>
          <h4 class="card-subtitle">{{$client->direction}}</h4>
          <p class="card-text">{{$client->fono}}</p>

          <div class="card-actions bg-secondary text-center">
            <br>
            <button type="button" name="button" class="btn btn-success"><a href="/clientes/{{$client->id}}/edit">Editar Cliente <b>{{$client->name}}</b></a></button>
          <br><br>
              @include('clientes.delete')
              <br>
            </div>
        </div>
       </div>
    </div>
</div>
@endsection
