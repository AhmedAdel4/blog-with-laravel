<!DOCTYPE html>
<html lang="en">
<head >
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="icon" href="iconfinder_livejournal_2022315.png" type="image/x-icon">
    <title>Simple Blog</title>
</head>
<body background="bg3.jpg" style="background-position: center; background-size:auto;">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <label class="navbar-brand">simple blog</label>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-md-auto">
            <li class="nav-item active">
                <a class="nav-link" href="{{ route('welcome_blog_path') }}">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a href="{{ route('create_blog_path') }}" class="nav-link">Create New Blog Post</a>
            </li>
        </div>
    </nav>
    <div class="container">
        @yield('content')
    </div>

</body>
</html>
