<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pelayanan extends Model
{
    use HasFactory;

    protected $fillable = ['jenis_pelayanan', 'harga'];

    public function antrianPelayanan()
    {
        return $this->hasMany(AntrianPelayanan::class, 'id_pelayanan');
    }
}

