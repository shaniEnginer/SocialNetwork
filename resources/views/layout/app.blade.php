<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<link rel="stylesheet" href="{{asset('css/app.css')}}">
<link rel="dns-prefetch" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">
<title>Chatty social media Network</title>
</head>
<body>


<nav class="navbar navbar-expand-md navbar-dark bg-dark">
<a class="navbar-brand" href="{{url('/')}}"> <span style="color:aqua;">USMAN</span>NETWORK</a>
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
<span class="navbar-toggler-icon"></span>
</button>
{{--  If User is Auth  --}}
@if(Auth::check())
<div class="collapse navbar-collapse" id="navbarCollapse">
<ul class="navbar-nav mr-auto">
<li class="nav-item">
<a class="nav-link" href="{{route('timeline')}}">Timeline</a>
</li>

<li class="nav-item">
<a class="nav-link" href="{{route('friends.index')}}">Friends</a>
</li>

<li class="nav-item">
<form class="form-inline mt-2 mt-md-0"  action="{{route('search.result')}}">
<input name="query" class="form-control mr-sm-2" type="text" placeholder="Search people" aria-label="Search">
<button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
</form>
</li>

</ul>
@endif


<ul class="navbar-nav ml-auto">
@if(Auth::check())
{{--  User Profile  --}}


<li class="nav-item">
<a class="nav-link" href="{{route('profile.show',Auth::user()->getUsername()) }}">{{Auth::user()->getUserName()}}</a>
</li>

<li class="nav-item">
<a class="nav-link" href="{{route('profile.update')}}">Update profile</a>
</li>

<li class="nav-item">
<a class="nav-link" href="{{route('auth.signout')}}">Signout</a>
</li>
@else


{{-- Option To signin  or signup User --}}
<li class="nav-item">
<a class="nav-link" href="{{route('auth.signin')}}">Sign in</a>
</li>
<li class="nav-item">
<a class="nav-link" href="{{route('auth.signup')}}">Register</a>
</li>

@endif
</ul>
</div>   
</nav>
<div class="container">
@include('parts.alert')
@yield('content')
<br>
</div>
<script src="{{ asset('js/app.js') }}"></script>

</body>
</html>