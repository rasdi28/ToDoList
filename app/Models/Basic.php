<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Basic extends Model
{
    protected $table = "basic";

    protected $fillable = [
        'name','email'
    ];
    public $timestamps = false;
}
