<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class barang extends Model
{
    /* use HasFactory; */
    protected $fillable = ['id', 'kd_barang', 'nm_barang', 'tp_barang', 'jml_barang', 'dstbr_barang', 'tgl_masuk', 'tgl_keluar'];
    protected $table = 'barangs';
    public $timesstamps = false;
}