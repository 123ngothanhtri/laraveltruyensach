@extends('admin.layout')

@section('content')

    <div class="card ">
        <div class="card-header">
            <h4>Thêm chương</h4>
        </div>
        <div class="card-body">
            @if (session('msg'))
                <div class="alert alert-success">
                    {{ session('msg') }}<button type="button" class="close" data-dismiss="alert">&times;</button>
                </div>
            @endif
            <form action="{{ url('chuong-them') }}" method="post" enctype="multipart/form-data" class="form-group">@csrf
                
                Tiêu đề chương
                <input class="form-control" type="text" name="ipc" required>

                Thuộc truyện
                <select class="form-control" name="ipidt">
                    @foreach ($truyen as $i)
                        <option value="{{ $i->id_truyen }}">{{ $i->ten_truyen }}</option>
                    @endforeach
                </select>

                Nội dung
                <textarea name="editor" id="editor" rows="30" cols="80"></textarea>
                <input class="btn btn-info" type="submit" value="Thêm">
            </form>
        </div>
    </div>
    <script src="https://cdn.ckeditor.com/4.14.0/standard/ckeditor.js"></script>
    <script type='text/javascript'>
        CKEDITOR.replace('editor');
    </script>
@endsection
