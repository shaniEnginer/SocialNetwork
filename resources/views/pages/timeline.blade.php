@extends('layout.app')
@section('content')
        <h3>Update Status</h3>
        {{-- <div class="col-lg-6">
        
                <form action="{{route('status.post')}}" method="POST">
        <textarea name="status" placeholder="How are you doing {{Auth::user()->getuserName()}}" cols="15" rows="4" class="form-control{{$errors->has('status') ? ' is-invalid ': ''}}">
        </textarea>
        
        @if($errors->has('status'))
        <div class="help-block text-danger">
        {{$errors->first()}}
        </div>
        endif
        @csrf
        <input type="submit" name="submit" value="update" class="btn btnoutline-success">
        <p class="btn btn-outline-danger btn-lg btn-block">Explore the world !!</p>
        </form>
        <hr>
        </div>

        <div class="col-lg-5">
        <h1>Statuses</h1>
        @if(count($statuses)== 0)
        <h4> you have no status yet !</h4>
        @else

        {{-- @foreach($statuses as $status)

        <div class="media">
        <a  class="pull-left" href=""><img src="{{$status->user->getUrl()}}" alt=""></a>
                <div class="media-body">
                <h4 class="media-heading">
                <a    href="">{{$status->user->getUserName()}}</a></h4>
                <p>{{$status->body}} </p>
                <ul class="list-inline">
                <li class="list-inline-item">2 Days ago</li>
                <li class="list-inline-item"><a href="">Like</a></li>
                <li class="list-inline-item"> 13 </li>
                </ul>
        </div>

                <form action="">
                <div class="form-group">
                <textarea name="" id=""  rows="2" class="form-control" placeholder="Reply this status"> </textarea>
                </div>
                <input type="submit" name="submit" value="Reply" class="btn btn-default btn-sm">
                </form>
                </div>
     
                <hr>
        @endforeach
        </div> --}}

        {{-- @endif --}} --}}

@endsection