@extends('frontend.layout.admin.master')
@section('contentadmin')
<div class="container">
	<div id="content">
		<a href="{{route('list.Restaurant')}}">&larr; Come Back</a>
		<form action="{{route('post.Restaurant')}}" method="post" class="beta-form-checkout" enctype="multipart/form-data">
			@csrf
			<div class="row">
				<div class="col-sm-3"></div>
				<div class="col-sm-6">
					<h4>Restaurant</h4>
					<div class="space20">&nbsp;</div>

					<div class="form-block">
						<label for="name">Name*</label>
						<input type="text" name="name" required>
					</div>
					<div class="form-block">
						<label for="description">Description*</label>
						<textarea class="form-control" name="description" required></textarea>
					</div>
					<div class="form-block">
						<label for="address">Address*</label>
						<input type="text" id="phone" name="address" required>
					</div>
					<div class="form-block">
						<label for="phone">Phone*</label>
						<input type="text" id="phone" name="phone" required>
					</div>
					
					<div class="form-block">
						<label for="Category">Category</label>
						<select class="form-control" name="category_id">
							@foreach($category as $cate)
							<option value="{{ $cate->id }}" >{{ $cate->name }}</option>
							@endforeach
						</select>
					</div>
					<div class="form-block">
						<label for="image">Image*</label>
						<input type="file" id="phone" name="image" required>
					</div>
					<div class="form-block">
						<button type="submit" class="btn btn-primary"></button>
					</div>
				</div>
				<div class="col-sm-3"></div>
			</div>
		</form>
	</div> <!-- #content -->
</div> <!-- .container -->
@stop