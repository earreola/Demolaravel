@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Modificar</div>

                <div class="panel-body">
              {!!Form::model($user, ['route' => ['usuario.update', $user->id], 'method'=>'PUT']) !!}
                @include('usuario.Form.repit');           
              {!!Form::submit('Modificar',['class'=>'btn btn-primary'])!!}
              {!!Form::close()!!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection