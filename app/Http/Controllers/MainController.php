<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\_daftar_barang;
use App\Models\pwl_kuis_1;

class MainController extends Controller
{
    public function index(){
        return view('index');
    }public function about(){
        return view('about');
    }public function blog(){
        return view('blog');
    }public function contact(){
        return view('contact');
    }public function welcome(){
        return view('welcome');
    }public function barang(){
        // return _daftar_barang::all();
        $data=pwl_kuis_1::all();
        return view('DaftarBarang',['blog'=>$data]);
    }public function pegawai(){
        $data=pwl_kuis_1::all();
        return view('DaftarPegawai',['blog'=>$data]);
    }public function pelanggan(){
        $data=pwl_kuis_1::all();
        return view('DaftarPelanggan',['blog'=>$data]);
    }public function suplier(){
        $data=pwl_kuis_1::all();
        return view('DaftarSuplier',['blog'=>$data]);
    }
}
