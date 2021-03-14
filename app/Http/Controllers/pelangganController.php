<?php

namespace App\Http\Controllers;
use App\Models\Pelanggan;

use Illuminate\Http\Request;

class pelangganController extends Controller
{
    public function index()
    {
        return view('DaftarPelanggan', ['pelanggan' => Pelanggan::pelanggan()]);
    }
}