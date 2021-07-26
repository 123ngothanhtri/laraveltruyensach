<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TheLoai;
use App\Models\Truyen;
use App\Models\Chuong;
class HomeController extends Controller
{
    
    public function trangchu()
    {
        $truyen=Truyen::all();
        return view('home.trang_chu',compact('truyen'));
    }
    public function chitiettruyen($id)
    {
        $truyen=Truyen::find($id);
        $chuong=Chuong::where('id_truyen',$id)->get();
        return view('home.chi_tiet_truyen',compact('truyen','chuong'));
    }
    public function doctruyen($idt)
    {
        $truyen=Truyen::find($idt);
        $chuong=Chuong::where('id_truyen',$idt)->paginate(1);//->where('sothutu_chuong',$stt)
        return view('home.doc_truyen',compact('chuong','truyen'));
        //return $chuong;
    }
}
