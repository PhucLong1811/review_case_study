@extends('frontend.layout.user.master')
@section('content')
<div class="container">
	<div class="col-lg-12 pt-5">
		<div class="col-lg-offset-3">
			<div class="col-lg-8">
				<table class="table table-striped custab">
					<thead>
						<tr class="bg-Success">
							<th>id</th>
							<th>image</th>
							<th>name</th>
							<th>delete</th>
						</tr>
					</thead>
					<tbody>
						@foreach($restaurants as $sanpham) 
						<tr>
							<td>{{$sanpham->restaurant_id}}</td>
							<td><img src="{{asset('storage/'.$sanpham->image) }}"  style="width: 150px;"></td>
							<td>{{$sanpham->name}}</td>
							<td><a href="{{route('del.Favorite',$sanpham->id)}}" class="btn btn-danger"><span class="pe-7s-trash"></span>delete</a></td>
						</tr>
						@endforeach
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>
@stop
