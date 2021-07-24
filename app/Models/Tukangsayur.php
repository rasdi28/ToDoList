<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tukangsayur extends Model
{
    protected $fillable = [
        'nama','alamat'
    ];

    public function permintaan()
    {
        return $this->hasMany(Permintaan::class,'permintaan_id');
    }

    
}
