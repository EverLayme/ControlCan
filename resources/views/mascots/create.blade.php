@auth
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card padding">
        <header class="card text-center bg-primary">
            <h4>Nueva Mascota</h4>
        </header>
        <div class="card-body">
            @include('mascots.form')
        </div>
    </div>
</div>
@endsection
@endauth
