<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'supplier_id','name','code','stock','stock_minimum'
    ];

    public function supplier()
    {
        return $this->belongsTo(Supplier::class,'supplier_id');
    }
}
