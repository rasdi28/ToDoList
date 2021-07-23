<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PermintaanItem extends Model
{
    protected $fillable = [
        'permintaan_id','item_id','kuantitas','harga'
    ];

    public function item()
    {
        return $this->belongsTo(Item::class,'item_id');
    }

    public function permintaan()
    {
        return $this->belongsTo(Permintaan::class,'permintaan_id');
    }


}
