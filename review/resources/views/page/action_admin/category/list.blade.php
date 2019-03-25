@extends('frontend.layout.admin.master')
@section('contentadmin')

<div class="container">
	<div class="row col-md-9 col-md-offset-1 custyle">
		<table class="table table-striped custab">
			<thead>
				<a href="{{route('create.Category')}}" class="btn btn-primary btn-xs pull-right"><b>+</b> create</a>
				<tr>
					<th class="text-center">id</th>
					<th class="text-center">Danh Mục</th>
					<th class="text-center">Sửa</th>
					<th class="text-center">Xóa</th>
				</tr>
			</thead>
			<tbody>
				@foreach($cate as $ca)
				<tr>
					<td class="text-center">
						{{$ca->id}}
					</td>
					<td class="text-center">
						{{$ca->name}}
					</td>
					<td class="text-center"><a href="{{route('edit.Category',$ca->id)}}" class="btn btn-success text-center"><span class="pe-7s-pen"></span></a></td>
					<td class="text-center"><a href="#" class="btn btn-danger text-center"><span class="pe-7s-trash"></span></a></td>
				</tr>
				@endforeach
			</tbody>
		</table>
	</div>
</div>

@endsection