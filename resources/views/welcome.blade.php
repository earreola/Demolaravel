<!DOCTYPE html>
<html>
    <head>
        <title>Laravel</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
 
        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">

       {!!Html::style('css/style.css')!!}

    </head>
    <body>
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

<?php
    $user = App\user::select('id','name','email')->get();
    foreach($user as $user):
        
?>

<table class="table table-striped"> 
    <div class="col-md-1"> 
     <thead> 
     <tr> 
      <th>#</th> 
      <th>Nombre</th> 
      <th>Email</th>  
    </tr> 
    </thead> 
<?php
    $user = App\user::select('id','name','email')->get();
    foreach($user as $user):
        
?>

       <th scope="row"> <strong>{{$user->id }}</strong> 
        <strong><td>{{$user->name }}</td></strong>
         <strong><td>{{$user->email }}</td></strong>

         <td >
             <button type="button" class="btn btn-primary center">Modificar</button>
             </td>
             <td>
             <button type="button" class="btn btn btn-danger">Eliminar</button>
         </td>
         
      </th>
      </table>
    </div> 
   

<?php endforeach?>


</body>

</html>
