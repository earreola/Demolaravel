@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Modificar</div>

                <div class="panel-body">

                  {!!Form::model($user, ['route' => ['usuario.update', $user->id], 'method'=>'PUT']) !!}
                        
                        @include('usuario.Form.repit')
                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    <i class="fa fa-btn fa-user"></i> Modificar
                                </button>
                            </div>
                        </div>
                  {!!Form::close()!!}
              
                </div>
            </div>
        </div>
    </div>
</div>
@endsection