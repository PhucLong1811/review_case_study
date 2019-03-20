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
			<td><a href="#"></a>edit</td>
			<td><a href="#"></a>delete</td>
		</tr>
		@endforeach
	</tbody>
</table>

<div class="container">
	<div class="row col-md-11 col-md-offset-0 custyle">
		<table class="table table-striped custab">
			<thead>
				<a href="{{route('create.Restaurant')}}" class="btn btn-primary btn-xs pull-right"><b>+</b> create</a>
				<tr>
					<th class="text-center">category</th>
					<th class="text-center">name</th>
					<th class="text-center">description</th>
					<th class="text-center">phone</th>
					<th class="text-center">address</th>
					<th class="text-center">status</th>
					<th class="text-center">image</th>
					<th class="text-center">Sửa</th>
					<th class="text-center">Xóa</th>
				</tr>
			</thead>
			<tbody>
				@foreach($restaurant as $res)
				<tr>
					<td class="text-center">{{$res->category->name}}</td>
					<td class="text-center">{{$res->name}}</td>
					<td class="" >{{$res->description}}</td>
					<td class="text-center">{{$res->phone}}</td>
					<td class="text-center">{{$res->address}}</td>
					<td class="text-center">{{$res->status}}</td>
					<td class="text-center">
						<img src="{{ asset('storage/'.$res->image) }}" >
					</td>
					<td class="text-center"><a href="{{route('edit.Register' , $res->id) }}" class="btn btn-success text-center"><span class="pe-7s-pen"></span></a></td>
					<td class="text-center"><a href="{{route('delete.Register' , $res->id) }}" class="btn btn-danger text-center"><span class="pe-7s-trash"></span></a></td>
				</tr>
				@endforeach
			</tbody>
		</table>
	</div>
</div>

@stop

