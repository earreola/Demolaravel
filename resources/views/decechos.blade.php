GUARDAR

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
                         @include('usuario.Form.repit');
                    {!!Form::submit('Registrar',['class'=>'btn btn-primary'])!!}

                

            </div>
          <a href=""  class="btn btn-primary">Modificar</a>
     </div>



<table class="table table-striped"> 

     <thead> 
     <tr> 
      <th>#</th> 
      <th>Nombre</th> 
      <th>Email</th>  
    </tr> 
    </thead> 
    <?php
        $users = App\user::all();
        foreach($users as $user):
        
    ?>
       <tr>
       <th scope="row"> <strong>{{$user->id }}</strong> 
        <strong><th>{{$user->name }}</th></strong>
         <strong><th>{{$user->email }}</th></strong>

         <th >
             <a href="{{ route('usuario.edit', $user)}}"  class="btn btn-primary">Modificar</a>
           
             </th>
             <th>
            {!!Form::model($user, ['route' => ['usuario.destroy', $user->id], 'method'=>'DELETE']) !!}
                {!!Form::submit('Eliminar',['class'=>'btn btn-danger'])!!}
            {!!Form::close()!!}
         </th>
         
      </th>
      <tr>
   
<?php endforeach?>
</table>

</body>

</html>
