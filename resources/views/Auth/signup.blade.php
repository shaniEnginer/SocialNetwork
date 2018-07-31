@extends('layout.app')

@section('content')

<div class="row">
	<h2>Sign Up</h2>
</div>
<div class="row">
		<div class="col-lg-6">

<form class="form-vertical"  role="form" action="{{route('auth.signup')}}" method="POST">
	 {{ csrf_field() }}

{{--  <!-- Email Div -->  --}}
<div class="form-group">

	<label>Enter your email here</label>
	<input type="text" placeholder="name@example.com" name="email" class="form-control{{$errors->has('email') ? ' is-invalid ': ''}}" value="{{Request::old('email') ?:''}}">
	@if($errors->has('email'))

<span class="help-block text-danger">
	{{$errors->first('email')}}
</span>

	@endif
</div>

{{--  <!-- Username Div -->  --}}

<div class="form-group">
	<label>Choose a userame</label>
	<input type="text" placeholder="Usman e.g" name="name" class="form-control{{$errors->has('name') ? ' is-invalid' : ''}}" value="{{Request::old('name') ?:''}}">
@if($errors->has('name'))

<span class="help-block text-danger">
	{{$errors->first('name')}}
</span>

	@endif
</div>


<!-- Password Div -->
<div class="form-group">
	<label>Choose a password</label>
	<input type="password" placeholder="atleast 6 chars" name="password" class="form-control{{$errors->has('password') ? ' is-invalid' : ''}}" >
	@if($errors->has('password'))

<span class="help-block text-danger">
	{{$errors->first('password')}}
</span>

	@endif
</div>

<input class="btn btn-default" type="submit" name="submit" value="Sign up">
</form>
		</div>
	</div>
@endsection

