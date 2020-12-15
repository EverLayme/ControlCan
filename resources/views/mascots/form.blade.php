{!! Form::open(['route' => [$mascot->url(),$mascot->id],'method' => $mascot->method(),'class'=>'app-form']) !!}
  <div>
     {!! Form::label('name','Nombre Mascota:') !!}
     {!! Form::text('name',$mascot->name,['class'=>'form-control']) !!}
  </div>
  <div>
     {!! Form::label('raza','Raza de la Mascota:') !!}
     {!! Form::text('raza',$mascot->raza,['class'=>'form-control']) !!}
  </div>

    <input type="submit" value="Guardar" class="btn btn-primary">
 </div>
{!! Form::close() !!}
