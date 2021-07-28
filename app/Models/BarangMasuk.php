<?php

namespace App\Models;

use App\Model\Category;
use Illuminate\Database\Eloquent\Model;

class BarangMasuk extends Model
{
    protected $fillable = [
        'name','description','image','category_id','stock'
    ];

    public function categories()
    {
        return $this->belongsTo(Category::class,'category_id');
    }
}
