@extends('layout.app')
@section('content')

<div class="row">
<div class="col-lg-5">
<br>
@include('Users.partials.userblock')
</div>
<div class="col-lg-4 clo-lg-offset-3">
<hr>
@if(Auth::user()->hasfriendRequestsPending($user))
<p>waiting orn {{$user->getuserName()}} to accept Request </p>

@elseif(Auth::user()->hasfriendRequestsRecieved($user))
<a href="#" class="btn btn-primary"> Accept friend Request</a>

@elseif(Auth::user()->isFriendWith($user))
<p>you and {{$user->getuserName()}} are Friends now</p>

@else
{{-- "{{route('profile.show',$user->name)}}" --}}
<a href="{{route('friends.add',$user->name)}}" class="btn btn-primary">Add Friend</a>
@endif
<h3>{{$user->getuserName()}}'s friends</h3>
@if(!count($user->friends()))

<h5> {{$user->getuserName()}} have no friends </h5>
@else

@foreach($user->friends() as $user)
@include('Users.partials.userblock')
@endforeach
@endif
</div>
</div>
@endsection 