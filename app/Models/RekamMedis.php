<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RekamMedis extends Model
{
    use HasFactory;

    protected $fillable = ['id_pasien'];

    public function pasien()
    {
        return $this->belongsTo(Pasien::class, 'id_pasien')->first();
    }

    public function hasilPemeriksaan()
    {
        return $this->hasMany(HasilPemeriksaan::class, 'id_rm')->get();
    }
}
