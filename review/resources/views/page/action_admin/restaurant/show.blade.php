@extends('frontend.layout.user.master')
@section('content')
<div class="container">
	<div id="content">
		<div class="col-sm-12">
			<div class="row">
				<div class="col-sm-4">
					<img src="{{asset('storage/'.$product->image) }}" alt="">
				</div>
				<div class="col-sm-8">
					<div class="single-item-body">
						<p class="single-item-title">{{$product->name}}</p>
						<p class="single-item-price">
							<span>địa chỉ: {{$product->address}}</span>
						</p>
					</div>

					<div class="clearfix"></div>
					<div class="space20">&nbsp;</div>

					<div class="single-item-desc">
						<p>{{$product->description}}</p>
					</div>
					<div class="space20">&nbsp;</div>
					<a class="add-to-cart" href="#"><i class="fa fa-shopping-cart"></i></a>

					<form method="post" >
						@csrf

						<div class="container-fliud">
							<div class="wrapper row">
								<div class="col-md-6">
									<div class="rating">
										<input id="input-1" name="rate" class="rating rating-loading" data-min="0" data-max="5" data-step="1"  data-size="xs">
										<button type="submit" class="btn btn-success">Submit Review</button>
									</div>
								</div>
							</div>
						</div>
					</form>
					<div class="clearfix"></div>
				</div>				
			</div>
		</div>
	</div> <!-- #content -->
</div> <!-- .container -->
<div class="space40">&nbsp;</div>
<div class="container">
	<div class="well">
		@include('page.action_admin.comment.create')
	</div>
</div>	
<div class="container">
	@foreach($product->comments as $comment)
	<table >
		<tr>
			<th>{{$comment->users->name}}</th>

		</tr>
		<tr>
			<td>{{$comment->content}}</td>
		</tr>
		<tr>
			<td>{{$comment->users->created_at}} </td>
		</tr>
		<tr>
			<td><a href="{{route('edit.Comment',$comment->id)}}">Edit</a></td>
			<hr>
		</tr>

	</table>
	@endforeach
</div>
@endsection