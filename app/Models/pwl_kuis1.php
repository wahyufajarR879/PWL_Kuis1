<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pwl_kuis_1 extends Model
{
    use HasFactory;
    public $table_barangs = 'barangs_table';
     public $table_pegawais = 'pegawais_table';
     public $table_pelanggans = 'pelanggans_table';
     public $table_suppliers = 'supplier_table';
};
