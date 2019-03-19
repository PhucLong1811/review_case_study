<div>
	{{$user->name}}
	@foreach($comment as $com)
	{{$com->content}}
	@endforeach
</div>