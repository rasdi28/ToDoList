<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        return view('users.index');
    }
    
    public function show(User $user)
    {
        return view('users.show',compact('user'));
    }
    
}
