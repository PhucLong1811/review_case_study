@extends('frontend.layout.admin.master')
@section('contentadmin')
<<<<<<< HEAD
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
=======
<div class="container">
	<div class="row col-md-9 col-md-offset-1 custyle">
		<table class="table table-striped custab">
			<thead>
				<a href="{{route('create.Category')}}" class="btn btn-primary btn-xs pull-right"><b>+</b> create</a>
				<tr>
					<th class="text-center">Danh Mục</th>
					<th class="text-center">Sửa</th>
					<th class="text-center">Xóa</th>
				</tr>
			</thead>
			<tbody>
				@foreach($cate as $ca)
				<tr>
					<td class="text-center">
						{{$ca->name}}
					</td>
				</tr>
				@endforeach
			</tbody>
		</table>
	</div>
</div>
>>>>>>> 7069182f03ac4d76c3eb4ce18c3253a98d21b458
@endsection