@extends('admin.layout')

@section('content')
    <div class="card ">
        <div class="card-header">
            <h4>Danh sách liên hệ</h4>
        </div>
        <div class="card-body">

            <table class="table table-sm ">
                <tr class="font-weight-bold alert-secondary">
                    <td>Email</td>
                    <td>Nội dung</td>
                    <td>Ngày liên hệ</td>
                    <td></td>
                </tr>
                @foreach ($qllh as $x)
                    <tr>
                        <td>{{ $x->email_lienhe }}</td>
                        <td>{{ $x->noidung_lienhe }}</td>
                        <td>{{ $x->ngay_lienhe }}</td>
                        <td>
                            <a href="{{ url('xoa-lien-he/' . $x->id_lienhe) }}" class="btn btn-sm btn-outline-danger">Xóa</a>
                        </td>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>


@endsection
