@extends('layout.app')
@section('content')
<div class="jumbotron text-center">
<h2>Welcome to chatty  </h2>
<h2>The Best Social media network ....... ever  </h2>
<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia asperiores consequuntur libero cumque commodi. Architecto harum ullam veniam nulla dicta.</p>
<h3>Sign up for account</h3>
<p ><a  class="btn btn-outline-success btn-lg btn-block" href="{{route('auth.signup')}}">Sign up</a> 
    </p> 
    
</div>
@endsection