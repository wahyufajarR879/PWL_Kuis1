<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Pegawai;


class pegawaiController extends Controller
{
    public function index()
    {
        return view('DaftarPegawai', ['pegawai' => Pegawai::pegawai()]);
    }
}