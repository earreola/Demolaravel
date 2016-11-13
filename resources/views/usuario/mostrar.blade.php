@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Usuarios</div>

                <div class="panel-body">
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

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
