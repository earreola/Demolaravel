<table class="table table-striped"> 

     <thead> 
     <tr> 
      <th>#</th> 
      <th>Nombre</th> 
      <th>Email</th>  
    </tr> 
    </thead> 
    @foreach($users as $user)
       <tr>
       <th scope="row"> <strong>{{$user->id }}</strong> 
        <strong><th>{{$user->name }}</th></strong>
         <strong><th>{{$user->email }}</th></strong>

         <th >
             <a href="{{ route('usuario.edit', $user)}}" class="btn btn-primary">Modificar</a>
             
             </th>
             <th>
            {!!Form::model($user, ['route' => ['usuario.destroy', $user->id], 'method'=>'DELETE']) !!}
                {!!Form::submit('Eliminar',['class'=>'btn btn-danger'])!!}
            {!!Form::close()!!}
         </th>
         
      </th>
      <tr>
   
@endforeach
</table>
