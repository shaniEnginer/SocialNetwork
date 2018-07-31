<div class="media">
<a  class="pull-left border" href="{{route('profile.show',$user->name) }}">
<img  class="media-object" src="{{$user->getUrl() }}" alt="{{$user->getUserName()}}">
</a>
<div class="media-body">
<h4 class="media-heading">
    <a href="{{route('profile.show',$user->name)}}">{{$user->getUserName()}}</a>
</h4>
Lahore ,Pakistan
</div>



</div>