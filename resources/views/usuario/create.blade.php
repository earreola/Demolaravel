{!!Form::open(['route' => 'usuario.store', 'method'=>'POST']) !!}
         @include('usuario.Form.repit')
    {!!Form::submit('Registrar',['class'=>'btn btn-primary'])!!}

{!!Form::close()!!}



