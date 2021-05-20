<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BarangMasuk extends Model
{
    protected $fillable = [
        'name','description','image','category_id'
    ];

    public function stock()
    {
        return $this->belongsTo(Stock::class);
    }


    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    
}
