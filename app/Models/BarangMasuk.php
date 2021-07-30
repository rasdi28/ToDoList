<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BarangMasuk extends Model
{
    protected $fillable = [
        'name','description','image'
    ];

    public function category()
    {
        $this->belongsTo(Category::class);
    }

    
}
