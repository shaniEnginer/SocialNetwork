@extends('layout.app')
@section('content')
<h3>Update your profile </h3>
<div class="row">
<div class="col-lg-6">
<form method="POST" action="{{route('profile.update')}}" >
@csrf
<div class="form-group">
<label for="name" >name</label>
<input  type="text" name="name" class="form-control{{$errors->has('name') ? ' is-invalid ': ''}}"  value="{{$user->name}}" >
</div>

<div class="form-group">
<label for="email">email</label>
<input type="email" name="email" id="email" class="form-control" value="{{$user->email}}">
</div>
<input type="submit" value="Update" name="submit" class="btn btn-outline-success "> 



</form>
</div>
</div>

@endsection