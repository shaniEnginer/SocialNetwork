@if(Session::has('info'))

<div style="background-color: red">
{{Session::get('info')}}	
</div>
@endif