<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
        return view('DaftarBarang');
    }public function pegawai(){
        return view('DaftarPegawai');
    }public function pelanggan(){
        return view('DaftarPelanggan');
    }public function suplier(){
        return view('DaftarSuplier');
    }
}
