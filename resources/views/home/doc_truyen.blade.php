@extends('home.layout')

@section('content')
    
    <ul class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="{{ url('/') }}">Trang chủ</a>
        </li>
        <li class="breadcrumb-item">
            <a href="{{ url('chi-tiet-truyen/' . $truyen->id_truyen) }}">{{ $truyen->ten_truyen }}</a>
        </li>
        <li class="breadcrumb-item active">
            {{ $chuong->ten_chuong }}
        </li>
    </ul>

    <img  style="width:150px" src="{{ asset('storage/' . $truyen->hinhanh_truyen) }}" alt="ảnh">
    
    <h5>{{ $chuong->ten_chuong }}</h5>
    <p>Cập nhật ngày {{ $chuong->ngaythem_chuong }}</p>
    <p>Lượt xem {{ $chuong->luotxem_chuong }}</p>
    <hr>

    <div>
        <style>
            img {
                width: 100%;
            }

        </style>
        {!! $chuong->noidung_chuong !!}
    </div>

    {{-- <div class="d-flex justify-content-center ">{!! $chuong->links() !!}</div> --}}
@endsection
