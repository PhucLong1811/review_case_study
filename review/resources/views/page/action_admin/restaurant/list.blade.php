@extends('frontend.layout.admin.master')
@section('contentadmin')

<div class="container">
	<div class="row col-md-11 col-md-offset-0 custyle">
		<table class="table table-striped custab">
			<thead>
				<a href="{{route('create.Restaurant')}}" class="btn btn-primary btn-xs pull-right"><b>+</b> create</a>
				<tr>
					<th class="text-center">id</th>
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
					<td class="text-center">{{$res->id}}</td>
					<td class="text-center">{{$res->category->name}}</td>
					<td class="text-center">{{$res->name}}</td>
					<td class="" >{{$res->description}}</td>
					<td class="text-center">{{$res->phone}}</td>
					<td class="text-center">{{$res->address}}</td>
					<td class="text-center">{{$res->status}}</td>
					<td class="text-center">
						<img src="{{ asset('storage/'.$res->image) }}" width="100px" >
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

