<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    use HasFactory;

    protected $fillable = ['id_pasien', 'id_hasil_pemeriksaan', 'tanggal_invoice', 'total_biaya'];

    public function pasien()
    {
        return $this->belongsTo(Pasien::class, 'id_pasien');
    }

    public function hasilPemeriksaan()
    {
        return $this->belongsTo(HasilPemeriksaan::class, 'id_hasil_pemeriksaan');
    }
}

