<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HasilPemeriksaan extends Model
{
    use HasFactory;

    protected $fillable = ['id_diagnosa', 'id_pelayanan', 'id_rm'];

    public function diagnosa()
    {
        return $this->belongsTo(Diagnosa::class, 'id_diagnosa');
    }

    public function pelayanan()
    {
        return $this->belongsTo(Pelayanan::class, 'id_pelayanan');
    }

    public function rekamMedis()
    {
        return $this->belongsTo(RekamMedis::class, 'id_rm');
    }
}

