<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Stock extends Model
{
    protected $fillable = [
        'barangmasuk_id','category_id','qty'

    ];

    public function barangmasuk(){
        return $this->belongsTo(BarangMasuk::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }


}
