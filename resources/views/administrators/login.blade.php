@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card padding">
                <header class="bg-info">
                    <h4 class="title text-center">
                        ACCESO ADMINISTRADOR
                    </h4>
                </header>
                <div class="card-body">
                    <form method="POST" action="{{route('login')}}">
                        {{csrf_field()}}
                        <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
                            <label for="name"><b>Administrador</b></label>
                            <input class="form-control"
                                type="name"
                                name="name"
                                placeholder="Ingrese usuario">
                                {!!$errors->first('name','<span class="help-block">:message</span>')!!}
                        </div>
                        <div class="form-group {{ $errors->has('password') ? 'has-error':''}}">
                            <label for="password"><b>Contraseña</b></label>
                            <input class="form-control"
                                type="password"
                                name="password"
                                placeholder="Ingresar Contraseña">
                                {!!$errors->first('password','<span class="help-block">:message</span>')!!}
                        </div>
                        <button class="btn btn-primary">Acceder</button>
                    </form>
                </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
