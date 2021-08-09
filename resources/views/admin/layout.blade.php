<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin truyện sách</title>
    <link rel="stylesheet" href="{{ asset('bootstrap.css') }}">

</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light alert-info">
        <a class="navbar-brand" href="#">ADMIN</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class=" btn" href="{{ url('/') }}">Home </a>
                </li>
                <li class="nav-item">
                    <a class=" btn" href="{{ url('the-loai') }}">Thể loại</a>
                </li>
                <li class="nav-item">
                    <a class=" btn" href="{{ url('truyen') }}">Truyện</a>
                </li>
                <li class="nav-item">
                    <a class=" btn" href="{{ url('chuong') }}">Chương</a>
                </li>
                <li class="nav-item">
                    <a class=" btn" href="{{ url('quan-ly-lien-he') }}">Liên hệ</a>
                </li>
            </ul>
            <form id="logout-form" action="{{ route('logout') }}" method="POST">@csrf
                <button type="submit" class="btn btn-outline-dark">Đăng xuất</button>
            </form>
        </div>
    </nav>
    <div class="container">
        @yield('content')
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
</body>

</html>
