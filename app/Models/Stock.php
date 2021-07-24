<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Stock extends Model
{
    protected $fillable = [
        'barangmasuk_id','stok'
    ];

    public function barangmasuk()
    {
        return $this->belongsTo(BarangMasuk::class,'barangmasuk_id');
    }
}
