<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BarangMasuk extends Model
{
    protected $fillable = [
        'name','description','image'
    ];

    public function stock()
    {
        return $this->hasMany(Stock::class);
    }

    
}
