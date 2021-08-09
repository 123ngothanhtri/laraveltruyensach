@extends('admin.layout')

@section('content')

    <div class="card" style="max-width: 500px">
        <div class="card-header">
            <h4>Cập nhật truyện</h4>
        </div>
        <div class="card-body">
            @if (session('msg'))
                <div class="alert alert-success">
                    {{ session('msg') }}<button type="button" class="close" data-dismiss="alert">&times;</button>
                </div>
            @endif
                <form action="{{ url('truyen-sua') }}" method="post" enctype="multipart/form-data" class="form-group">@csrf
                    <input type="hidden" name="ipidt" value="{{ $truyen->id_truyen }}">

                    Tên truyện
                    <input type="text" name="ipt" value="{{ $truyen->ten_truyen }}" required class="form-control">

                    {{-- Thể loại
                    <select class="form-control" name="iptl">
                        @foreach ($tl as $i)
                            <option value="{{ $i->id_theloai }}">{{ $i->ten_theloai }}</option>
                        @endforeach
                    </select> --}}

                    Trạng thái
                    <select class="form-control" name="iptt">
                        <option value="Đang ra">Đang ra</option>
                        <option value="Full">Full</option>
                    </select>

                    Mô tả
                    <input type="text" name="ipmt" value="{{ $truyen->mota_truyen }}" required class="form-control">

                    Tác giả
                    <input type="text" name="iptg" value="{{ $truyen->tacgia_truyen }}" class="form-control" required>
                    Ngày phát hành
                    <input class="form-control" type="date" value="{{ $truyen->ngayphathanh_truyen }}" name="ipnph" required>

                    {{-- Hình ảnh
                    <div>
                        <input type="file" name="ipha" id="upload" onchange="preview_image(event)" required accept="image/*" class="form-control" >
                        <img id="output_image" class="w-25" />
                    </div> --}}
                    <br>
                    <input type="submit" value="Lưu lại" class="btn btn-info">
                    <a href="{{ url('truyen') }}" class="btn btn-outline-secondary">Hủy</a>
                </form>
        </div>
    </div>

    <script type='text/javascript'>
        function preview_image(event) {
            var reader = new FileReader();
            reader.onload = function() {
                var output = document.getElementById('output_image');
                output.src = reader.result;
            }
            reader.readAsDataURL(event.target.files[0]);
        }
    </script>
@endsection
