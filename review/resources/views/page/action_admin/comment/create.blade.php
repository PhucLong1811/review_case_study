
<form action="{{route('post.Comment',['restaurantId' => $product->id])}}" method="post" accept-charset="utf-8">
	@csrf
	<div class="form-group">
		<textarea name="content" rows="3" class="form-control" value=""></textarea>
		<button type="submit" class="btn btn-primary">Bình Luận</button>
	</div>
</form>