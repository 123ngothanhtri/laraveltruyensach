@extends('home.layout')

@section('content')
<div class="d-flex flex-wrap">
            @foreach($truyen as $t)
            
                <div class="card m-2">
                    <div class="card-body">
                        <div style="">
                        <img style="object-fit: cover;width: 300px; height:400px" src="{{ asset('storage/'.$t->hinhanh_truyen) }}" alt="ảnh">
                        </div>
                    </div>
                    <div class="card-footer">
                       <a href="{{ url('chi-tiet-truyen/'.$t->id_truyen) }}">{{ $t->ten_truyen }}</a> 
                    </div>
                  </div>
            
            @endforeach
        </div>
@endsection
