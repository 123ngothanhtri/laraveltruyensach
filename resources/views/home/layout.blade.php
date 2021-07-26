<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Truyện hay online</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-warning">
        <a class="navbar-brand" href="#">Truyện hay</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            
            <li class="nav-item">
              <a class="nav-link" href="{{ url('/') }}">Trang chủ</a>
            </li>
          </ul>
          <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
          </form>
        </div>
      </nav>
    <div class="container">
      @yield('content')
    </div>
    
    <footer class="alert-secondary text-center text-lg-start alert-secondary">
      <div class="container p-4">
          <div class="row">
              <div class="col-lg-6 col-md-12 mb-4 mb-md-0">
                  <h5>Thông tin giới thiệu</h5>
                  <p>Truyện Full - Đọc truyện online, đọc truyện chữ, truyện hay. Website luôn cập nhật những bộ truyện mới thuộc các thể loại đặc sắc như truyện tiên hiệp, truyện kiếm hiệp, hay truyện ngôn tình một cách nhanh nhất. Hỗ trợ mọi thiết bị như di động và máy tính bảng.</p>
      </div>
              <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                  <ul class="list-unstyled mb-0">
                      <li>
                          <a class="text-dark" href="{{ url('/') }}">Trang chủ</a>
                      </li>
                      <li>
                          <a class="text-dark" href="{{ url('chuong') }} ">Đăng nhập</a>
                      </li>
                  </ul>
              </div>
              <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                  <h5 class="mb-0">Liên hệ</h5>
                  <ul class="list-unstyled">
                      <li><a>Email: genshin@gmail.com</a></li>
                      <li><a>Số điện thoại: 0123456789 </a></li>
                      <li><a>Facebook Zalo Instagram</a></li>
                  </ul>
              </div>
          </div>
      </div>
      <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
          <p> © 2021 Copyright: Truyen hay</p>
      </div>
  </footer>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>
</html>