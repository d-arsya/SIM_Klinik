<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pelayanan extends Model
{
    use HasFactory;
    protected $table = 'pelayanan';

    protected $fillable = ['jenis_pelayanan', 'harga'];
    protected $primaryKey = 'id_pelayanan';

    public function antrianPelayanan()
    {
        return $this->hasMany(AntrianPelayanan::class, 'id_pelayanan');
    }
}

