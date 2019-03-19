@extends('frontend.layout.user.master')
@section('content')
	<div class="rev-slider" >
	<div class="inner-header">
	<div class="container">
		<div class="pull-left">
			<h6 class="inner-title">Đăng kí</h6>
		</div>
		<div class="pull-right">
			<div class="beta-breadcrumb">
				<a href="{{route('list.Register')}}">&larr; Come Back</a> / <span>Đăng kí</span>
			</div>
		</div>
		<div class="clearfix"></div>
	</div>
</div>
<div class="container">
	<div id="content">
		<form action="{{route('post.Register')}}" method="post" class="beta-form-checkout" enctype="multipart/form-data">
			@csrf
			<div class="row">
				<div class="col-sm-3">
				</div>
				<div class="col-sm-6">
					@if(count($errors) > 0)
					<div>
						<ul class="alert-dark">
							@foreach($errors->all() as $error)
							<li>
								{{$error}}
							</li>
							@endforeach
						</ul>
					</div>
					@endif
					@if(Session::has('thanhcong'))
					<div class="alert alert-success">
						{{Session::get('thanhcong')}}
					</div>
					@endif
					<div class="space20">&nbsp;</div>


					<div class="form-block">
						<label for="email">Email address*</label>
						<input type="email" id="email" name="email"required>
					</div>

					<div class="form-block">
						<label for="your_last_name">Fullname*</label>
						<input type="text" id="your_last_name" name="name" required>
					</div>

					<div class="form-block">
						<label for="adress">Address*</label>
						<input type="text" id="adress" name="address" placeholder="Street Address" required>
					</div>


					<div class="form-block">
						<label for="phone">Phone*</label>
						<input type="text" id="phone" name="phone" required>
					</div>
					<div class="form-block">
						<label for="phone">Password*</label>
						<input type="password" id="phone" name="password" required>
					</div>
					<div class="form-block">
						<label for="phone">Re password*</label>
						<input type="password" id="adress" name="re_password" required>
					</div>
					<!-- <div class="form-block">
						<label for="phone">Gender</label>
						<input type="radio" id="phone" name="gender" required><span>Nam</span>
						<input type="radio" id="phone" name="gender" required><span>Nữ</span>
					</div> -->
					<div class="form-block">
						<label for="phone">DOB</label>
						<input type="date" id="email" name="DOB" required>
					</div>
					<div class="form-block">
						<label for="phone">Quyền</label>
						<input type="number" id="phone" name="level" required>
					</div>
					<div class="form-block">
						<label for="phone">image</label>
						<input type="file" id="phone" name="image" required>
					</div>
					<div class="form-block">
						<button type="submit" class="btn btn-primary">Register</button>
					</div>
					
				</div>
				<div class="col-sm-3"></div>
			</div>
		</form>
	</div> <!-- #content -->
</div> <!-- .container -->
	</div> <!-- .container -->
	@endsection