@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Register</div>
                <div class="panel-body">
                    {!!Form::model(['route' => 'register', 'method'=>'POST', 'class' => 'form-horizontal' ]) !!}
                       @include('usuario.Form.repit')

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    <i class="fa fa-btn fa-user"></i> Register
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
