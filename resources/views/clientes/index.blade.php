@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row">
   @foreach ($clientes as $client)
   <div class="col-xs-12 col-sm-6 col-md-4">
    <div class="card padding">
        <header>
             <h2 class="card-title">
               <a href="/clientes/{{$client->id}}">{{$client->name}}</a>
             </h2>
             <h4 class="card-subtitle">{{$client->direction}}</h4>
         </header>
        <p class="card-text">{{$client->fono}}</p>
        </div>
   </div>

    @endforeach
  </div>
  <div class="">
    {{$clientes->links()}}
</div>
</div>
@endsection
