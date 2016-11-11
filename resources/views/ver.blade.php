  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
 
 <div class="container">
            <div class="content">

				{!!Form::open(['route' => 'usuario.store', 'method'=>'POST']) !!}
				    <div class="form-group">
				      {!!Form::label('Nombre')!!}
				      {!!Form::text('name',null,['class'=>'form-control', 'placeholder'=>'ingrese el nombre del usuario'])!!}
				   </div>

				    <div class="form-group">
				      {!!Form::label('Correo')!!}
				      {!!Form::text('email',null,['class'=>'form-control', 'placeholder'=>'ingrese el correo del usuario'])!!}
				   </div>

				    <div class="form-group">
				      {!!Form::label('Contraseña')!!}
				      {!!Form::password('password',['class'=>'form-control', 'placeholder'=>'ingrese la contraseña del usuario'])!!}
				   </div>
				       {!!Form::submit('Registrar',['class'=>'btn btn-primary'])!!}

				{!!Form::close()!!}

  </div></div>

