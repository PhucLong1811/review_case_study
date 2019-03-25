
<h5>Sửa bình luận ... <span class="glyphicon glyphicon-pencil"></span></h5>
<form action="{{route('update.Comment',$id)}}" method="post" accept-charset="utf-8">
    @csrf
    <div class="form-group">

        <textarea name="content" rows="3" class="form-control" >{{ $comment_content }}</textarea>
        <button type="submit" class="btn btn-primary">Sửa</button>
    </div>
</form>
