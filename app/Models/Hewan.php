<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hewan extends Model
{
    use HasFactory;

    protected $table = 'hewan';

    protected $primaryKey = 'id_jenis_hewan';

    protected $fillable = [
        'nama_hewan',
        'gender',
        'umur',
        'jenis_hewan',
        'warna',
        'berat_badan',
        'pulsus',
        'suhu',
        'frekuensi_napas',
        'service',
        'jenis_vaksin', // tambahkan ini
        'sudah_vaksin', // dan ini
    ];

    public function ras()
    {
        return $this->hasMany(Ras::class, 'id_jenis_hewan');
    }
}

