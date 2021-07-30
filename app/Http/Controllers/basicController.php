<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Basic;



class basicController extends Controller
{
    public function index()
    {
      

       return Basic::all();


        // return [
        //     'name'=>"rasdi abdulrohman",
        //     'email'=>"rasdiabdulrohman@gmail.com"
        // ];
    }


    function insert(Request $request)
    {
        $user = new Basic();
        $user ->name = $request->name;
        $user->email = $request->email;
        if ($user->save()){
            return ['status'=>"data has save"];
        }
    }
}
