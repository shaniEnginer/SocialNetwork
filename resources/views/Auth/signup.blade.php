@extends('layout.app')

@section('content')

<h2></h2>
<form class="form-vertical" action="{{route('auth.signup')}}" method="POST">
	 {{ csrf_field() }}

<!-- Email Div -->
<div class="form-group{{$errors->has('email') ? ' has-error' : ''}}">
	<!-- {{ $errors->has('name') ? ' has-error' : '' }}" -->
	<label>Enter your email here</label>
	<input type="text" name="email" class="form-control" value="{{Request::old('email') ?:''}}">
	@if($errors->has('email'))

<span class="help-block">
	{{$errors->first('email')}}
</span>

	@endif
</div>

<!-- Username Div -->

<div class="form-group{{$errors->has('name') ? ' has-error' : ''}}">
	<label>Choose a userame</label>
	<input type="text" name="name" class="form-control" value="{{Request::old('name') ?:''}}">
@if($errors->has('name'))

<span class="help-block">
	{{$errors->first('name')}}
</span>

	@endif
</div>


<!-- Password Div -->
<div class="form-group{{$errors->has('password') ? ' has-error' : ''}}">
	<label>Choose a password</label>
	<input type="password" name="password" class="form-control" >
	@if($errors->has('password'))

<span class="help-block">
	{{$errors->first('password')}}
</span>

	@endif
</div>

<input class="btn btn-default" type="submit" name="submit" value="Sign in">
</form>


@endsection

