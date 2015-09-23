@extends('layouts.app')

{{-- Web site Title --}}
@section('title') {!! trans('site/user.register') !!} :: @parent @stop

{{-- Content --}}
@section('content')
    <div class="row">
        <div class="page-header">
            <h2>{!! trans('site/user.register') !!}</h2>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row">
            {!! Form::open(array('url' => URL::to('auth/register'), 'method' => 'post', 'files'=> true)) !!}
            <div class="form-group  {{ $errors->has('name') ? 'has-error' : '' }}">
                {!! Form::label('name', trans('site/user.name'), array('class' => 'control-label')) !!}
                <div class="controls">
                    {!! Form::text('name', null, array('class' => 'form-control')) !!}
                    <span class="help-block">{{ $errors->first('name', ':message') }}</span>
                </div>
            </div>
            <div class="form-group  {{ $errors->has('username') ? 'has-error' : '' }}">
                {!! Form::label('username', 'Username', array('class' => 'control-label')) !!}
                <div class="controls">
                    {!! Form::text('username', null, array('class' => 'form-control')) !!}
                    <span class="help-block">{{ $errors->first('username', ':message') }}</span>
                </div>
            </div>
            <div class="form-group  {{ $errors->has('email') ? 'has-error' : '' }}">
                {!! Form::label('email', trans('site/user.e_mail'), array('class' => 'control-label')) !!}
                <div class="controls">
                    {!! Form::text('email', null, array('class' => 'form-control')) !!}
                    <span class="help-block">{{ $errors->first('email', ':message') }}</span>
                </div>
            </div>
            <div class="form-group  {{ $errors->has('password') ? 'has-error' : '' }}">
                {!! Form::label('password', "Password", array('class' => 'control-label')) !!}
                <div class="controls">
                    {!! Form::password('password', array('class' => 'form-control')) !!}
                    <span class="help-block">{{ $errors->first('password', ':message') }}</span>
                </div>
            </div>
            <div class="form-group  {{ $errors->has('password_confirmation') ? 'has-error' : '' }}">
                {!! Form::label('password_confirmation', "Confirm Password", array('class' => 'control-label')) !!}
                <div class="controls">
                    {!! Form::password('password_confirmation', array('class' => 'form-control')) !!}
                    <span class="help-block">{{ $errors->first('password_confirmation', ':message') }}</span>
                </div>
            </div>
            <div class="form-group">
                <div class="col-md-6">
                    <button type="submit" class="btn btn-primary">
                        Register
                    </button>
                </div>
		<div class="col-md-6 col-md-offset-6">
		    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal123">
			Launch E
		    </button>
		    
		    <div class="modal fade" id="myModal123" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  			<div class="modal-dialog" role="document">
    				<div class="modal-content">
      					<div class="modal-header">
        					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        					<h4 class="modal-title" id="myModalLabel">IP Register</h4>
      					</div>
      					<div class="modal-body">
						{!! Form::label('dorm',"Dormitory",array('class' => 'control-label')) !!}
						
        						{!! Form::select('dorm',array('f1' =>'B3', 'f2' => 'B4','f3' => 'B5','f4' => 'B6','f5' => 'B7','f6' => 'B9','f7' => 'B11','f8' => 'B12','f9' => 'B13','f10' => 'B1','f11' => 'G1','f12' => 'G2','f13' => 'G3','f14' => 'G4','f15' => 'G14','f16' => 'GH','f17' => 'SP')) !!}
						<br>
						 {!! Form::label('room',"Room",array('class' => 'control-label')) !!}
							{!! Form::text('room',null, array('class' => 'form-control')) !!}
						<br>
						{!! Form::label('port', "Port", array('class' => 'control-label')) !!}
							{!! Form::select('port', array('a' => 'A','b' => 'B','c' => 'C','d' => 'D')) !!}
						<br>		
						{!! Form::label('mac_address',"Mac Address",array('class' => 'control-label')) !!}
                                                          {!! Form::text('mac_address',null , array('class' => 'form-control')) !!}
		
     				        </div>
      					<div class="modal-footer">
        					<button type="button" class="btn btn-primary">Save changes</button>
      					</div>
    				</div>

  			</div>
		    </div>	
		</div>
            </div>
            {!! Form::close() !!}
        </div>
    </div>
@endsection
