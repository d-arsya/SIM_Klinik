<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hewan extends Model
{
    use HasFactory;

    protected $table = 'hewan';

    protected $primaryKey = 'id_jenis_hewan';

    protected $fillable = ['jenis_hewan'.'pulsus','suhu','frekuensi_napas'];

    public function ras()
    {
        return $this->hasMany(Ras::class, 'id_jenis_hewan');
    }
}

