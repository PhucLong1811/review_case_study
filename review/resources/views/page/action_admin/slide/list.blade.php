@extends('frontend.layout.admin.master')
@section('contentadmin')

<table border="1" style="margin-left: 5%;">
	<a href="{{route('create.Slide')}}">Create</a>
	<thead>
		<tr>
			<th class="text-center">Ảnh</th>
			<th class="text-center">Sửa</th>
			<th class="text-center">Xóa</th>
		</tr>
	</thead>
	<tbody>
		@foreach($slide as $sli)
		<tr>
			<td>
				@if($sli->image)
				<img src="{{asset('storage/'.$sli->image) }}"  style="width: 800px; margin: 5px;">
				@else
				{{'Chưa có ảnh'}}
				@endif
			</td>
			<td><a href="#" class="btn btn-outline-success">Edit</a></td>
			<td><a href="#" class="btn btn-outline-success">Delete</a></td>
		</tr>
		@endforeach
	</tbody>
</table>
@endsection