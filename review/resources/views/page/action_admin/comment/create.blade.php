
<h5>Viết bình luận ... <span class="glyphicon glyphicon-pencill"></span></h5>
<form action="{{route('post.Comment')}}" method="post" accept-charset="utf-8">
	@csrf
	<div class="form-group">
		<textarea name="content" rows="3" class="form-control"></textarea>
	</div>
	<button type="submit" class="btn btn-primary">Bình Luận</button>
</form>
