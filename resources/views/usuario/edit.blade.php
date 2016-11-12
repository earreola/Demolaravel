{!!Form::model($user, ['route' => ['usuario.update', $user->id], 'method'=>'PUT']) !!}
  @include('usuario.Form.repit');           
{!!Form::submit('Modificar',['class'=>'btn btn-primary'])!!}
{!!Form::close()!!}
 