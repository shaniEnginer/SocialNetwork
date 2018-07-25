<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <style>
.clear-both
{
clear: both;

}

    </style>
    <title>Chatty social media Network</title>
</head>
<body>
    <div class="container">

    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
      <a class="navbar-brand" href="/Chattynetwork/public/"> <span style="color:aqua;">Chatty</span>  Network</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      @if(Auth::check())
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav mr-auto">
          {{-- <li class="nav-item active">
            <a class="nav-link" href="/Chattynetwork/public/">Home <span class="sr-only">(current)</span></a>
          </li> --}}
          <li class="nav-item">
            <a class="nav-link" href="#">Timeline</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Friends</a>
          </li>
          <li class="nav-item">
          <form class="form-inline mt-2 mt-md-0"  action="{{route('search.result')}}">
              <input name="query" class="form-control mr-sm-2" type="text" placeholder="Search people" aria-label="Search">
              <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
          </li>

        </ul>
@endif
        {{-- <form class="form-inline mt-2 mt-md-0">
          <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form> --}}


        
        <ul class="navbar-nav ml-auto">
      @if(Auth::check())
      {{--  User Profile  --}}
      
                   
      <li class="nav-item">
        <a class="nav-link" href="##">{{Auth::user()->getUserName()}}</a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="##">Update profile</a>
      </li>
      
          <li class="nav-item">
            <a class="nav-link" href="{{route('auth.signout')}}">Signout</a>
          </li>
      @else


      {{-- Option To sign User --}}
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
</div>
    {{--  <main role="main" class="container">
      
    </main>  --}}
    <div class="container">
        @include('parts.alert')
      @yield('content')

</div>
<script src="{{ asset('js/app.js') }}"></script>

</body>
</html>