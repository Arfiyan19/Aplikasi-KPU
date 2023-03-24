<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pemilih extends Model
{
    use HasFactory;
    protected $table = 'pemilihs';
    protected $fillable = [
        'nik',
        'nokk',
        'nama',
        'tempat_lahir',
        'tanggal_lahir',
        'jenis_kelamin',
        'desa',
        'kecamatan',
        'tps',
        'status_dpt',
    ];
}
