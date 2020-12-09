@auth
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card padding">
        <header class="bg-success">
            <h4>Editar Cliente</h4>
            <p class="text-center">{{$client->name}}</p>
        </header>
        <div class="card-body">
            @include('clientes.form')
        </div>
    </div>
</div>
@endsection
@endauth
