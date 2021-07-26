@extends('home.layout')

@section('content')


    <div class="card my-2">
        <div class="card-body">
            <div style="">
                <img style="object-fit: cover;width: 300px; height:400px" src="{{ asset('storage/' . $truyen->hinhanh_truyen) }}" alt="ảnh">
            </div>
        </div>
        <div class="card-footer">
            <h5 class="display-4">{{ $truyen->ten_truyen }}</h5>
            <p>Tác giả: {{ $truyen->tacgia_truyen }}</p>
            <p>Ngày phát hành: {{ $truyen->ngayphathanh_truyen }}</p>
            <p>Trạng thái: {{ $truyen->trangthai_truyen }}</p>
            <p>Mô tả: {{ $truyen->mota_truyen }}</p>
        </div>
    </div>
    <div class="card my-2">
        <div class="card-header">
            Đọc truyện
        </div>
        <div class="card-body">
            <ul class="list-group">
            @foreach ($chuong as $c)
            
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    <a href="{{ url('doc-truyen/'.$truyen->id_truyen.'/'.$c->sothutu_chuong) }}" class="btn">{{ $c->ten_chuong }}</a>
                    <p>Cập nhật ngày {{ $c->ngaythem_chuong }}</p>
                </li>
              
            
            @endforeach
        </ul> 
        </div>
    </div>
    <div class="card my-2">
        <div class="card-header">
            Bình luận truyện
        </div>
        <div class="card-body">
           <div class="fb-comments" data-href="http://localhost/laraveltruyensach/public/chi-tiet-truyen/{{ $truyen->id_truyen }}" data-width data-numposts="5"></div>
    <div id="fb-root"></div>
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v11.0&appId=177919137611377&autoLogAppEvents=1" nonce="Cj7Lx7Nc"></script>

        </div>
    </div>
    
@endsection
