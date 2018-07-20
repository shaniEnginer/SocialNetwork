<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    
    <title>Chatty social media Network</title>
</head>
<body>
    <div class="container">

    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
      <a class="navbar-brand" href="http://localhost/Chattynetwork/public/"> <span style="color:aqua;">Chatty</span>  Network</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="index.html#">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="index.html#">Link</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="index.html#">Disabled</a>
          </li>
          <li class="nav-item">
                <a class="nav-link" href="index.html#">Disabled</a>
              </li>
        </ul>
        <form class="form-inline mt-2 mt-md-0">
          <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
      </div>
    </nav>
</div>
    <main role="main" class="container">
      @include('partials.alert')
  <ul class="list-group">
        <li class="list-group-item">Second</li>
        <li class="list-group-item">Second</li>
        <li class="list-group-item">Second</li>
        <li class="list-group-item">Second</li>
        <li class="list-group-item">Second</li>
        
  </ul>
    </main>
    <div class="container">
    @yield('content')

</div>
<script src="{{ asset('js/app.js') }}"></script>

</body>
</html>