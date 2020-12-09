@auth
    {!! Form::open(['method' => 'DELETE', 'route' => ['clientes.destroy',$client->id],
 'onsubmit' => 'return confirm("¿Estas seguro de eliminar este Cliente?")']) !!}
 <input type="submit" value="Eliminar Cliente" class="btn btn-danger">
{!! Form::close() !!}
@endauth
