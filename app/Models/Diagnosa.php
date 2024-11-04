<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Diagnosa extends Model
{
    use HasFactory;
    protected $table = 'diagnosa';
    protected $primaryKey = 'id_diagnosa';

    protected $fillable = ['hasil_diagnosa', 'id_jenis_hewan'];

    public function hewan()
    {
        return $this->belongsTo(Hewan::class, 'hewan_id', 'id_jenis_hewan');
    }
}


