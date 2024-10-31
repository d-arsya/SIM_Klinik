<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Diagnosa extends Model
{
    use HasFactory;

    protected $fillable = ['hasil_diagnosa', 'id_jenis_hewan'];

    public function hewan()
    {
        return $this->belongsTo(Hewan::class, 'id_jenis_hewan');
    }
}


