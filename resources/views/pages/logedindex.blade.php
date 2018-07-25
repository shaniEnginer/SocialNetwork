@extends('layout.app')
@section('content')

<div class="jumbotron">
<h2>How are you doing <strong class="text-primary">{{$name}}</strong> ?</h2>
<p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
    <p>Officia asperiores consequuntur libero cumque commodisperiores consequuntur libero cumque commodi.</p>  
    <p>  Architecto harum ullam veniam nulla dicta.</p>
<p class="btn btn-outline-danger btn-lg btn-block">Explore the world !!</p>

</div>


{{--  <input class="form-control" type="text" placeholder="Readonly input here…" readonly>  --}}
<h1>This is the Code to Copy  </h1>
<textarea name="Usman" class="form-control" cols="20" rows="10" readonly>
   
    Lorem ipsum dolor sit amet consectetur adipisicing elit.
    Officia asperiores consequuntur libero cumque commodisperiores consequuntur libero cumque commodi.  
     Architecto harum ullam veniam nulla dicta



</textarea>

@endsection