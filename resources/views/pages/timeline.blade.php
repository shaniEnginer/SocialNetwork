@extends('layout.app')
@section('content')
<h3>Update Status</h3>
<div class="col-lg-6">
<form action="{{route('status.post')}}" method="POST">
<textarea name="status" placeholder="How are you doing {{Auth::user()->getuserName()}}" cols="15" rows="4" class="form-control{{$errors->has('status') ? ' is-invalid ': ''}}">
</textarea>
@if($errors->has('status'))

<div class="help-block text-danger">
{{$errors->first()}}
</div>
@endif



@csrf
<input type="submit" name="submit" value="update" class="btn btnoutline-success">
{{-- <p class="btn btn-outline-danger btn-lg btn-block">Explore the world !!</p> --}}
</form>
<hr>
</div>


<div class="col-lg-5">
<h1>Statuses</h1>
</div>


@endsection