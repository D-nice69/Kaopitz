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
        <?php
        $message = Session::get('message');
        if ($message) {
        echo '<span style="color: red; padding: 10px">' . $message . '</span>';
        Session::put('message', null);
        }
        ?>
        <h2>Form</h2>
        <form action="{{ route('home.check') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="slug">Slug:</label>
                <input type="slug" class="form-control" id="slug" placeholder="Enter slug" name="slug">
            </div>
            <div class="form-group">
                <label for="title">Title:</label>
                <input type="title" class="form-control" id="title" placeholder="Enter title" name="title">
            </div>
            <div class="form-group">
                <label for="content">Content:</label>
                <br/>
                <textarea name="content" id="" cols="120" rows="5"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

</body>

</html>
