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
</head>

<body>

    <div class="container">
        <h2>Tìm kiếm</h2>
        <form action="{{ route('post.search') }}" method="POST">
            @csrf
            <div class="form-group">
                <input type="text" class="form-control" name="key_words">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
        <h2>Bài viết</h2>
        <table class="table">
            <thead>
                <tr>
                    <th>Tiêu đề</th>
                    <th>Nội dung</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($posts as $post)
                <tr>
                    <td>{{$post->title}}</td>
                    <td>{{$post->content}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
        {{$posts->links("pagination::bootstrap-4")}}
    </div>
</body>

</html>
