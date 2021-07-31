@extends('home.layout')

@section('content')
    <ul class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="{{ url('/') }}">Trang chủ</a>
        </li>
        <li class="breadcrumb-item active">
            {{ $truyen->ten_truyen }}
        </li>
    </ul>
    <div class="card">
        <div class="card-body">
            <div>
                <img style="object-fit: cover; height:150px" src="{{ asset('storage/' . $truyen->hinhanh_truyen) }}" alt="ảnh">
            </div>
        </div>
        <div class="card-footer">
            <h4>{{ $truyen->ten_truyen }}</h4>
            <p>Tác giả: {{ $truyen->tacgia_truyen }}</p>
            <p>Ngày cập nhật: {{ $truyen->ngayphathanh_truyen }}</p>
            <p>Nguồn: {{ $truyen->nguon_truyen }}</p>
            <p>Trạng thái: <span class="badge badge-success">{{ $truyen->trangthai_truyen }}</span></p>
            <p>Mô tả: {{ $truyen->mota_truyen }}</p>
        </div>
    </div>

    <div class="card my-2">
        <div class="card-header">
            Danh sách chương
        </div>
        <div style="max-height: 300px;overflow:auto">
            
                @foreach ($chuong as $c)
                    <div class="px-3 d-flex justify-content-between" style="border-bottom:1px solid rgb(218, 218, 218)">
                        <a href="{{ url('doc-truyen/' . $truyen->id_truyen . '/' . $c->id_chuong) }}">{{ $c->ten_chuong }}</a>
                        <p class="small">Lượt xem {{ $c->luotxem_chuong }} - Cập nhật ngày {{ $c->ngaythem_chuong }}
                        </p>
                    </div>
                @endforeach
            
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
