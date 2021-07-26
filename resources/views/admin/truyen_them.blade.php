@extends('admin.layout')

@section('content')

    <div class="card " style="max-width: 500px">
        <div class="card-header">
            <h4>Thêm truyện</h4>
        </div>
        <div class="card-body">
            @if (session('msg'))
                <div class="alert alert-success">
                    {{ session('msg') }}<button type="button" class="close" data-dismiss="alert">&times;</button>
                </div>
            @endif
                <form action="{{ url('truyen-them') }}" method="post" enctype="multipart/form-data" class="form-group">@csrf
                    Tên truyện
                    <input class="form-control" type="text" name="ipt" required>

                    Thể loại
                    <select class="form-control" name="iptl">
                        @foreach ($tl as $i)
                            <option value="{{ $i->id_theloai }}">{{ $i->ten_theloai }}</option>
                        @endforeach
                    </select>

                    Trạng thái
                    <select class="form-control" name="iptt">
                        <option value="Đang ra">Đang ra</option>
                        <option value="Full">Full</option>
                    </select>

                    Mô tả
                    <input class="form-control" type="text" name="ipmt" required>

                    Tác giả
                    <input class="form-control" type="text" name="iptg" required>
                    Ngày phát hành
                    <input class="form-control" type="date" name="ipnph" required>

                    Hình ảnh
                    <div>
                        <input type="file" name="ipha" id="upload" onchange="preview_image(event)" required accept="image/*" class="form-control" >
                        <img id="output_image" class="w-25" />
                    </div>
                    <br>
                    <input class="btn btn-info" type="submit" value="Thêm">
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
