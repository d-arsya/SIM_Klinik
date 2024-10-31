<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hewan extends Model
{
    use HasFactory;

    protected $fillable = ['jenis_hewan'];

    public function ras()
    {
        return $this->hasMany(Ras::class, 'id_jenis_hewan');
    }
}

