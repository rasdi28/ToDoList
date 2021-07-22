<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pelanggan extends Model
{
    protected $table = 'pelanggans';
    protected $fillable = [
        'nama'
    ];

    public function permintaan()
    {
        return $this->hasMany(Permintaan::class,'permintaan_id');
    }
}
