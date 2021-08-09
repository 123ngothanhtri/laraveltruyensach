@extends('admin.layout')

@section('content')
<div class="card ">
    <div class="card-header">
        <h4>Danh sách truyện</h4>
    </div>
    <div class="card-body">
        @if (session('msg'))
        <div class="alert alert-success">
          {{session('msg')}}<button type="button" class="close" data-dismiss="alert">&times;</button>
        </div>
    @endif
    
    <table class="table table-hover table-sm">
        <tr class="font-weight-bold table-secondary">
            <td>Mã truyện</td>
            <td>Hình ảnh</td>
            <td>Tên truyện</td>
            <td>Tác giả</td>
            <td>Ngày phát hành</td>
            <td>Trạng thái</td>
            <td>Thể loại</td>
            <td>Mô tả</td>
            <td>
                <a href="{{ url('truyen-them') }}" class="btn btn-success mb-2">
                    Thêm
                </a>
            </td>
        </tr>
        @foreach ($truyen as $x)
            <tr>
                <td>{{ $x->id_truyen }}</td>
                <td>
                    <img height="100px" src="{{ asset('storage/'.$x->hinhanh_truyen) }}" alt="ảnh">
                </td>
                <td>{{ $x->ten_truyen }}</td>
                <td>{{ $x->tacgia_truyen }}</td>
                <td>{{ $x->ngayphathanh_truyen }}</td>
                <td>{{ $x->trangthai_truyen }}</td>
                <td>{{ $x->ten_theloai }}</td>
                <td>{{ $x->mota_truyen }}</td>
                <td>
                    <a href="{{url('truyen-sua/'.$x->id_truyen)}}" class="btn btn-sm btn-outline-info">
                        Sửa
                    </a>
                    <a onclick="return confirm('Xóa thật chứ ?');" href="{{url('truyen-xoa/'.$x->id_truyen)}}" class="btn btn-sm btn-outline-danger">
                        Xóa
                    </a>
                </td>
            </tr>
        @endforeach
    </table>
    </div>
  </div>
    
@endsection
