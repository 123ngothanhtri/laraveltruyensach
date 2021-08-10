@extends('home.layout')

@section('content')
    <div class="alert-secondary p-3">


        <form action="{{ url('tim-kiem-truyen') }}" method="POST" class="form-inline  ">@csrf
            <input class="form-control mr-2 w-50" name="tktk" type="search" placeholder="Tìm kiếm" required>
            <button class="btn btn-success " type="submit">Tìm kiếm</button>
        </form>
    </div>
    <div class="p-2">
        @foreach ($theloai as $t)
            <a @if (isset($xn))  @if ($xn==$t->id_theloai)
                class="btn btn-sm btn-secondary"
            @else
                class="btn btn-sm btn-outline-secondary" @endif
            @else
                class="btn btn-sm btn-outline-secondary"
        @endif
        href="{{ url('loc/' . $t->id_theloai) }}">{{ $t->ten_theloai }}</a>
        @endforeach
    </div>
    <div class="row">
        @if (count($truyen) > 0)
            @foreach ($truyen as $t)
                <div class="col-md-4">
                    <div class="card m-2">
                        <div class="card-body">
                            <div style="">
                                <img style="object-fit: contain;width: 100%; height:200px" src="{{ asset('storage/' . $t->hinhanh_truyen) }}" alt="ảnh">
                            </div>
                        </div>
                        <div class="card-footer text-center">

                            <a href="{{ url('chi-tiet-truyen/' . $t->id_truyen) }}" class="font-weight-bold  text-dark">{{ $t->ten_truyen }}</a>
                        </div>
                    </div>
                </div>
            @endforeach
        @else
            <div class="jumbotron bg-light display-4 w-100 text-center">Không có truyện :(</div>
        @endif
    </div>
    <div class="d-flex justify-content-center ">{!! $truyen->links() !!}</div>
@endsection
