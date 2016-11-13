  {{ csrf_field() }}

    <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
        {!!Form::label('Nombre',null,['class'=>'col-md-4 control-label'])!!}
           <div class="col-md-6">
                {!!Form::text('name',null,['class'=>'form-control', 'placeholder'=>'ingrese el nombre del usuario','value'=>'name'])!!}

		        @if ($errors->has('name'))
		            <span class="help-block">
		                <strong>{{ $errors->first('name') }}</strong>
		            </span>
		        @endif
          </div>
    </div>

    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
        {!!Form::label('Correo',null,['class'=>'col-md-4 control-label'])!!}
      		  <div class="col-md-6">
        			{!!Form::text('email',null,['class'=>'form-control', 'placeholder'=>'ingrese el correo del usuario','value' => 'email'])!!}
			            @if ($errors->has('email'))
			                <span class="help-block">
			                    <strong>{{ $errors->first('email') }}</strong>
			                </span>
			            @endif
       		  </div>
    </div>

 <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
   	 {!!Form::label('Contraseña',null,['class'=>'col-md-4 control-label','for' => 'password'])!!}
         <div class="col-md-6">             
  			{!!Form::password('password',['class'=>'form-control', 'placeholder'=>'ingrese la contraseña del usuario','id' => 'password'])!!}

                @if ($errors->has('password'))
                    <span class="help-block">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                @endif
          </div>
 </div>

<div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
    {!!Form::label('Confirmar Contraseña',null,['class'=>'col-md-4 control-label','for' => 'password-confirm'])!!}
    	<div class="col-md-6">
      		  {!!Form::password('password_confirmation',['class'=>'form-control', 'placeholder'=>'ingrese la contraseña del usuario','id' => 'password-confirm'])!!}

		        @if ($errors->has('password_confirmation'))
		            <span class="help-block">
		                <strong>{{ $errors->first('password_confirmation') }}</strong>
		            </span>
		        @endif
    	</div>
</div>