<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Chuong;
use App\Models\Truyen;
use App\Models\LienHe;
use App\Models\TheLoai;
class ThongKeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function thongke()
    {
        $chuong = Chuong::all();
        $truyen=Truyen::all();
        $theloai=TheLoai::all();
        $lienhe=LienHe::all();


        return view('admin.thong_ke',compact('chuong','truyen','theloai','lienhe'));
    }

}
