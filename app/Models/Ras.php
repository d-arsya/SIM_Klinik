<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ras extends Model
{
    use HasFactory;

    protected $fillable = ['id_jenis_hewan', 'nama_ras'];

    public function hewan()
    {
        return $this->belongsTo(Hewan::class, 'id_jenis_hewan');
    }
}

