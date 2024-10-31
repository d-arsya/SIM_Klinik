<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Antrian extends Model
{
    use HasFactory;

    protected $table = 'antrian';
    protected $fillable = ['id_pasien', 'tanggal_antrian', 'status_antrian', 'id_users'];

    public function pasien()
    {
        return $this->belongsTo(Pasien::class, 'id_pasien');
    }

    public function users()
    {
        return $this->belongsTo(User::class, 'id_users');
    }

    public function antrianPelayanan()
    {
        return $this->hasMany(AntrianPelayanan::class, 'id_antrian');
    }
}

