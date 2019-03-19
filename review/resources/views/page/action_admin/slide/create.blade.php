@extends('frontend.layout.admin.master')
@section('contentadmin')
<a href="{{route('list.Slide')}}">&larr; Come Back</a>
<form action="{{route('post.Slide')}}" method="post" accept-charset="utf-8" enctype="multipart/form-data">
	@csrf
	<input type="file" name="image">
	<input type="submit" name="sumbit" >
</form>
@endsection