<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'supplier_id','name','code','stock','stock_minimum','price','purchase_price'
    ];

    public function supplier()
    {
        return $this->belongsTo(Supplier::class,'supplier_id');
    }
}
