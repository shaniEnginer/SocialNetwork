@extends('layout.app')
@section('content')
<div class="jumbotron clear-both">
	<h2>Sign in</h2>
</div>
<div class="row">
<div class="col-lg-6">
<form class="form-vertical" role="form" action="{{route('auth.signin')}}" method="POST">
@csrf
<div class="form-group">
<label for="email">Email</label>
<input type="email" name="email" class="form-control">
</div>

<div class="form-group">
    <label for="passwrod">Password</label>
    <input type="password" name="password" class="form-control">
    </div>

<div class="checkbox">
<label for="">
    <input type="checkbox" name="remember" >
</label>
</div>



<input type="submit" value="Sign in" name="submit" class="btn btn-primary">
</form>
</div>
</div>
@endsection

