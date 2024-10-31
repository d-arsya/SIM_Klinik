<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pasien extends Model
{
    use HasFactory;

    protected $fillable = ['id_owner', 'nama_pasien', 'id_jenis_hewan', 'id_ras', 'jenis_kelamin', 'umur'];

    public function owner()
    {
        return $this->belongsTo(Owner::class, 'id_owner')->first();
    }

    public function hewan()
    {
        return $this->belongsTo(Hewan::class, 'id_jenis_hewan')->first();
    }

    public function ras()
    {
        return $this->belongsTo(Ras::class, 'id_ras')->first();
    }

    public function rekamMedis()
    {
        return $this->hasOne(RekamMedis::class, 'id_rm')->first();
    }
}
