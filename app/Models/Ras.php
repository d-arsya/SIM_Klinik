<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ras extends Model
{
    use HasFactory;

    protected $table = 'ras';

    protected $fillable = ['hewan_id', 'nama_ras'];

    protected $primaryKey = 'id_ras';

    public function hewan()
    {
        return $this->belongsTo(Hewan::class, 'hewan_id', 'id_jenis_hewan');
    }
}

