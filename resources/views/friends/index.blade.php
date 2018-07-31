@extends('layout.app')

@section('content')

<div class="row">

<div class="col-lg-6">
<h3>Your Friends </h3>
@if(!count($friends))

<h5> you have no friends </h5>
@else

@foreach($friends as $user)
@include('Users.partials.userblock')
@endforeach
@endif

</div>

<div class="col-lg-6">
<h3>Friends Requests</h3>
    
    </div>

</div>


@endsection

