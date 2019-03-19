@extends('frontend.layout.admin.master')
@section('contentadmin')
<table border="1" style="margin:50px 250px;">
	<caption>table title and/or explanatory text</caption>
	<a href="{{route('create.Register')}}">Create</a>
	<thead>
		<tr>
			<th>id</th>
			<th>name</th>
			<th>email</th>
			<th>gender</th>
			<th>date</th>
			<th>image</th>
			<th>level</th>
			<th>sửa</th>
			<th>xóa</th>
		</tr>
	</thead>
	<tbody>
		@foreach($user as $u)
		<tr>
			<td>{{$u->id}}</td>
			<td>{{$u->name}}</td>
			<td>{{$u->email}}</td>
			<td>{{$u->gender}}</td>
			<td>{{$u->DOB}}</td>
			<td>
				@if($u->image)
				<img src="{{asset('storage/'.$u->image) }}"  style="width: 100px;">
				@else
				{{'Chưa có ảnh'}}
				@endif
			</td>
			<td>{{$u->level}}</td>
			<td><a href="{{route('edit.Register' , $u->id) }}" class="btn btn-outline-success">Edit</a></td>
			<td><a href="{{route('delete.Register' , $u->id) }}" class="btn btn-outline-success">Delete</a></td>
		</tr>
		@endforeach
	</tbody>
</table>
@endsection