@extends('frontend.layout.admin.master')
@section('contentadmin')
<a href="{{route('list.Category')}}">&larr; Come Back</a>
<form action="{{route('update.Category',$categories->id)}}" method="post" accept-charset="utf-8">
	@csrf
	<input type="text" name="name" value="{{$categories->name}}">
	<input type="submit" name="sumbit" >
</form>
@endsection