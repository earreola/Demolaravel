@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Usuarios</div>

                <div class="panel-body">
                    <table class="ancho"> 

                         <thead> 
                         <tr> 
                          <th>#</th> 
                          <th>Nombre</th> 
                          <th>Email</th>
                          <th>Modificar</th> 
                          <th>Eliminar</th>   
                        </tr> 
                        </thead> 
                        <tbody>
                        @foreach($users as $user)
                           <tr>
                           <td scope="row"> <strong>{{$user->id }}</strong> 
                            <strong><td>{{$user->name }}</td></strong>
                             <strong><td>{{$user->email }}</td></strong>

                             <td >
                                 <a href="{{ route('usuario.edit', $user)}}" class="btn btn-primary">Modificar</a>
                                 
                                 </td>
                                 <td>
                                {!!Form::model($user, ['route' => ['usuario.destroy', $user->id], 'method'=>'DELETE']) !!}
                                    {!!Form::submit('Eliminar',['class'=>'btn btn-danger'])!!}
                                {!!Form::close()!!}
                             </td>
                             
                          </td>
                          <tr>
                       
                    @endforeach
                     </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
