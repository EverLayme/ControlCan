{!! Form::open(['route' => [$client->url(),$client->id],'method' => $client->method(),'class'=>'app-form']) !!}
  <div>
     {!! Form::label('name','Nombre Completo:') !!}
     {!! Form::text('name',$client->name,['class'=>'form-control']) !!}
  </div>
  <div>
     {!! Form::label('direction','Direccion:') !!}
     {!! Form::text('direction',$client->direction,['class'=>'form-control']) !!}
  </div>

  <div>
    {!! Form::label('fono','Telefono/Celular:') !!}
    {!! Form::text('fono',$client->fono,['class'=>'form-control']) !!}
  </div>
<div>
    <input type="submit" value="Guardar" class="btn btn-primary">
 </div>
{!! Form::close() !!}
