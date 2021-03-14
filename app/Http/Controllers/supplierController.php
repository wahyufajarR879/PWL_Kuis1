<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Supplier;

class supplierController extends Controller
{
    public function index()
    {
        return view('DaftarSuplier', ['supplier' => Supplier::supplier()]);
    }
}