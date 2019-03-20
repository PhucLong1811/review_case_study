@extends('frontend.layout.admin.master')
@section('contentadmin')
<div class="container">
	<div class="row col-md-9 col-md-offset-1 custyle">
		<table class="table table-striped custab">
			<thead>
				<a href="{{route('create.Slide')}}" class="btn btn-primary btn-xs pull-right"><b>+</b> create</a>
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
					<td><a href="#" class="btn btn-success"><span class="pe-7s-pen"></span></a></td>
					<td><a href="#" class="btn btn-danger"><span class="pe-7s-trash"></span></a></td>
				</tr>
				@endforeach
			</tbody>
		</table>
	</div>
</div>
@endsection
