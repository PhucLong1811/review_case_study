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
					<div class="clearfix"></div>
				</div>
			</div>
		</div>		
	</div> <!-- #content -->
</div> <!-- .container -->
<div class="space40">&nbsp;</div>
<div class="well">
	@include('page.action_admin.comment.create')
</div>

@endsection