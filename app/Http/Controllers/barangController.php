<?php

namespace App\Http\Controllers;
use App\Models\Barang;

use Illuminate\Http\Request;

class BarangController extends Controller
{
    public function index()
    {
        return view('DaftarBarang', ['barang' => Barang::barang()]);
    }
}