@extends('layout.app')

@section('content')


<h3>your search for "{{Request::input('query')}}"</h3>
<div class="col-lg-12">
@if(count($users)>0)
@foreach($users as $user)
@include('Users/partials/userblock');
<hr>
@endforeach
@else
<hr>
<h5>No Records Found !</h5>

@endif
</div>
@endsection

