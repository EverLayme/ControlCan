@auth
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card">
        <header class="bg-info text-center">
            <h4>Adicionar Nuevo Cliente</h4>
        </header>
        <div class="card-body">
            @include('clientes.form')
        </div>
    </div>
</div>
@endsection
@endauth
