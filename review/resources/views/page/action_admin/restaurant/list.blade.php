@extends('frontend.layout.admin.master')
@section('contentadmin')
<table border="1">
	<a href="{{route('create.Restaurant')}}">Create</a>
	<thead>
		<tr>
			<th>category</th>
			<th>name</th>
			<th>description</th>
			<th>phone</th>
			<th>address</th>
			<th>status</th>
			<th>image</th>
			<th>Sửa</th>
			<th>Xóa</th>
		</tr>
	</thead>
	<tbody>
		@foreach($restaurant as $res)
		<tr>
			<td>{{$res->Category->name}}</td>
			<td>{{$res->name}}</td>
			<td>{{$res->description}}</td>
			<td>{{$res->phone}}</td>
			<td>{{$res->address}}</td>
			<td>{{$res->status}}</td>
			<td>
				<img src="{{ asset('storage/'.$res->image) }}"  style="width: 100px;">
			</td>
			<td><a href="#"></a></td>
			<td><a href="#"></a></td>
		</tr>
		@endforeach
	</tbody>
</table>
@stop