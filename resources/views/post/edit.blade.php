<!DOCTYPE html>
<html lang="en">

<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <style>
        a:hover {
            text-decoration: none;
        }
    </style>
</head>

<body>

    <div class="container">
        <form action="{{ route('post.update',['id'=>$post->id]) }}" method="POST">
            @csrf
            @method('patch')
            <h2>Chỉnh sửa bài viết</h2>
            <label for="">Title</label>
            <div class="form-group">
                <input type="text" class="form-control" name="title" value="{{ $post->title }}">
            </div>
            <label for="">Content</label>
            <div class="form-group">
                <textarea name="content" id="" style="width: 100%" rows="5">{{ $post->content }}</textarea>
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
</body>

</html>
