@extends('frontend.layout.admin.master')
@section('contentadmin')
<table style="margin: 50px 500px;" border="1">
	<a href="{{route('create.Category')}}">Create</a>
	<thead>
		<tr>
			<th>Danh Mục</th>
			<th>Sửa</th>
			<th>Xóa</th>
		</tr>
	</thead>
	<tbody>
		@foreach($cate as $ca)
		<tr>
			<td>
				{{$ca->name}}
			</td>
			<td><a href="#">sửa</a></td>
			<td><a href="#">xóa</a></td>
		</tr>
		@endforeach
	</tbody>
</table>
@endsection