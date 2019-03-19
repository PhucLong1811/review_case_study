@extends('frontend.layout.admin.master')
@section('contentadmin')
<div class="container">
	<div class="row col-md-9 col-md-offset-1 custyle">
		<table class="table table-striped custab">
			<thead>
				<a href="{{route('create.Register')}}" class="btn btn-primary btn-xs pull-right"><b>+</b> create</a>
				<tr>
					<th class="text-center">id</th>
					<th class="text-center">name</th>
					<th class="text-center">email</th>
					<th class="text-center">gender</th>
					<th class="text-center">date</th>
					<th class="text-center">image</th>
					<th class="text-center">level</th>
					<th class="text-center">sửa</th>
					<th class="text-center">xóa</th>
				</tr>
			</thead>
			<tbody>
				@foreach($user as $u)
				<tr>
					<td class="text-center">{{$u->id}}</td>
					<td class="text-center">{{$u->name}}</td>
					<td class="text-center">{{$u->email}}</td>
					<td class="text-center">{{$u->gender}}</td>
					<td class="text-center">{{$u->DOB}}</td>
					<td class="text-center">
						@if($u->image)
						<img src="{{asset('storage/'.$u->image) }}"  style="width: 100px; height:50px; " >
						@else
						{{'Chưa có ảnh'}}
						@endif
					</td>
					<td class="text-center">{{$u->level}}</td>
					<td><a href="{{route('edit.Register' , $u->id) }}" class="btn btn-success text-center"><span class="pe-7s-pen"></span></a></td>
					<td><a href="{{route('delete.Register' , $u->id) }}" class="btn btn-danger text-center"><span class="pe-7s-trash"></span></a></td>
				</tr>
				@endforeach
			</tbody>
		</table>
	</div>
</div>
@endsection
