<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Arsip extends Model
{
    use HasFactory;
    protected $table = 'arsip';

    protected $fillable = [
        'id', 'nama', 'kategori_arsip', 'tanggal_dibuat', 'tanggal_selesai', 'lokasi_arsip', 'file'
    ];

}
