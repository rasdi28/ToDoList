<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class profilesController extends Controller
{
    function list()
    {
        $data = Http::get('https://jsonplaceholder.typicode.com/posts')->json();
        return view ('profiles',['data'=>$data]);
    }
}
