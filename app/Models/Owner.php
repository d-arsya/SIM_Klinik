<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Owner extends Model
{
    use HasFactory;

    protected $fillable = ['nama_owner', 'alamat', 'id_provinsi', 'id_kabupaten', 'id_kecamatan', 'id_desa', 'no_hp'];

    public function pasien()
    {
        return $this->hasMany(Pasien::class, 'id_owner')->get();
    }
}
