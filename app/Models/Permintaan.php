<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Permintaan extends Model
{
    protected $fillable = [
        'pelanggan_id','tukangsayur_id','alamat'
    ];

    public function pelanggan()
    {
        return $this->belongsTo(Pelanggan::class,'pelanggan_id');
    }

    public function tukangsayur()
    {
        return $this->belongsTo(Tukangsayur::class,'tukangsayur_id');
    }

    

    
}
