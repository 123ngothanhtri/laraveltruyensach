@extends('admin.layout')

@section('content')
<div class="card">
    <div class="card-header">
        <h4>Danh sách chương</h4>
    </div>
    <div class="card-body">
        @if (session('msg'))
        <div class="alert alert-success">
          {{session('msg')}}<button type="button" class="close" data-dismiss="alert">&times;</button>
        </div>
    @endif
    <a href="{{ url('chuong-them') }}" class="btn btn-success mb-2">
        Thêm chương
    </a>
    <table class="table table-hover table-sm">
        <tr class="font-weight-bold table-info">
            <td>Mã chương</td>
            <td>Tiêu đề chương</td>
            <td>Nội dung</td>
            <td>Thuộc truyện</td>
            <td>Thao tác</td>
        </tr>
        @foreach ($chuong as $x)
            <tr>
                <td>{{ $x->id_chuong }}</td>
                <td>{{ $x->ten_chuong }}</td>
                <td>
                    ...
                </td>
                <td>{{ $x->ten_truyen }}</td>
                <td>
                    <a href="{{url('chuong-sua/'.$x->id_chuong)}}" class="btn btn-sm btn-outline-danger">
                        Sửa
                    </a>
                    <a onclick="return confirm('Xóa thật chứ ?');" href="{{url('chuong-xoa/'.$x->id_chuong)}}" class="btn btn-sm btn-outline-danger">
                        Xóa
                    </a>
                </td>
            </tr>
        @endforeach
    </table>
    </div>
  </div>
    
@endsection
