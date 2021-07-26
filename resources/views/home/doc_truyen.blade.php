@extends('home.layout')

@section('content')
<div>
    <img style="object-fit: cover;width: 300px; height:400px" src="{{ asset('storage/' . $truyen->hinhanh_truyen) }}" alt="ảnh">
</div>
@foreach ($chuong as $c)
    <p class="display-4">Chương {{ $c->sothutu_chuong }} - {{ $c->ten_chuong }}</p>
    
    Cập nhật ngày {{ $c->ngaythem_chuong }}
    <hr>
    <p></p>
    <div>{!! $c->noidung_chuong !!}</div>
@endforeach



{{-- @php
    $tie=$chuong->sothutu_chuong;
    $lu=$chuong->sothutu_chuong;
    $tiep=$tie+1;
    $lui=$lu-1;
@endphp
<div>
<a href="{{ url('doc-truyen/'.$truyen->id_truyen.'/'.$lui) }}" class="btn btn-info">Lùi lại</a>
<a href="{{ url('doc-truyen/'.$truyen->id_truyen.'/'.$tiep) }}" class="btn btn-info">Kế tiếp</a>
    </div> --}}


    <div class="d-flex justify-content-center ">{!! $chuong->links() !!}</div>
@endsection
