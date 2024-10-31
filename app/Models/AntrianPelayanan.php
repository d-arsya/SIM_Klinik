<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AntrianPelayanan extends Model
{
    use HasFactory;

    protected $fillable = ['id_antrian', 'id_pelayanan'];

    public function antrian()
    {
        return $this->belongsTo(Antrian::class, 'id_antrian');
    }

    public function pelayanan()
    {
        return $this->belongsTo(Pelayanan::class, 'id_pelayanan');
    }
}
