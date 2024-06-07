<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PesanLapangan extends Model
{
    use HasFactory;

    protected $table = 'pesan_lapangan';

    protected $fillable = [
        'tanggal',
        'lapangan_id',
        'nama_pemesan',
        'waktu',
        'durasi',
        'status',
    ];

    // Relasi dengan model KategoriLapangan
    public function lapangan()
    {
        return $this->belongsTo(Court::class, 'lapangan_id');
    }
}