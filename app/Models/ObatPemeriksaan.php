<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ObatPemeriksaan extends Model
{
    use HasFactory;

    protected $fillable = ['id_hasil_pemeriksaan', 'id_obat', 'jumlah'];

    public function hasilPemeriksaan()
    {
        return $this->belongsTo(HasilPemeriksaan::class, 'id_hasil_pemeriksaan');
    }

    public function obat()
    {
        return $this->belongsTo(StokObat::class, 'id_obat');
    }
}

