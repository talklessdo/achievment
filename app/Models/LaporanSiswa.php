<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LaporanSiswa extends Model
{
    /** @use HasFactory<\Database\Factories\LaporanSiswaFactory> */
    use HasFactory;

    protected $table = 'laporan_siswa';
}
