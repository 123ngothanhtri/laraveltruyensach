@extends('admin.layout')

@section('content')
    <div class="card ">
        <div class="card-header">
            <h3>Thống kê</h3>
        </div>
        <div class="row card-body">
            <div class="col-md-4">
                <div class="jumbotron">
                    <h3>{{ count($theloai) }}</h3> Thể loại
                </div>
            </div>
            <div class="col-md-4">
                <div class="jumbotron">
                    <h3>{{ count($truyen) }}</h3> Truyện
                </div>
            </div>
            <div class="col-md-4">
                <div class="jumbotron">
                    <h3>{{ count($chuong) }}</h3> Chương
                </div>
            </div>
            <div class="col-md-4">
                <div class="jumbotron">
                    <h3>{{ count($lienhe) }}</h3> Liên Hệ
                </div>
            </div>
        </div>
    </div>


@endsection
