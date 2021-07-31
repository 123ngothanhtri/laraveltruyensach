@extends('admin.layout')

@section('content')

    <h4>Danh sách chương</h4>
    @if (session('msg'))
        <div class="alert alert-success">
            {{ session('msg') }}<button type="button" class="close" data-dismiss="alert">&times;</button>
        </div>
    @endif
    <a href="{{ url('chuong-them') }}" class="btn btn-success mb-2">
        Thêm chương
    </a>
    @foreach ($truyen as $ttttt)


        <div class="card my-3 ">
            <div class="card-header font-weight-bold">
                {{ $ttttt->ten_truyen }}
            </div>
            <div class="card-body">
                @foreach ($chuon as $ccc)
                    @if ($ttttt->id_truyen == $ccc->id_truyen)
                        <div class=" d-flex justify-content-between ">

                            <p>{{ $ccc->ten_chuong }}</p>
                            <span>
                                <span>Cập nhật ngày {{ $ccc->ngaythem_chuong }} </span>
                                <a href="{{ url('chuong-sua/' . $ccc->id_chuong) }}" class="btn btn-sm btn-outline-info">
                                    Sửa
                                </a>
                                <a onclick="return confirm('Xóa thật chứ ?');" href="{{ url('chuong-xoa/' . $ccc->id_chuong) }}" class="btn btn-sm btn-outline-danger">
                                    Xóa
                                </a>
                            </span>
                        </div>
                    @endif
                @endforeach

            </div>
        </div>
    @endforeach

@endsection
