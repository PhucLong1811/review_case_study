<h5>Viết bình luận ... <span class="glyphicon glyphicon-pencil"></span></h5>
<<<<<<< HEAD
<form action="{{route('post.Comment',['restaurantId' => $product->id])}}" method="post" accept-charset="utf-8">
	@csrf
	<div class="form-group">
		<textarea name="content" rows="3" class="form-control"></textarea>


=======
<form  method="post" accept-charset="utf-8">
	@csrf
	<div class="form-group">
		<textarea name="comment" rows="3" class="form-control"></textarea>
>>>>>>> 676f2570b296acbe8a1185a89ac25ed859b85842
	</div>
	<button type="submit" class="btn btn-primary">Bình Luận</button>
</form>

