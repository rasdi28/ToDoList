<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Po extends Model
{
    protected $table = 'po';
    protected $fillable = [
        'product_id','po'
    ];
}
