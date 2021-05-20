<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SuperAdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        if (request()->user()->hasRole('superadmin')){
            return view('pages.admin.dashboard.index');
        } else {
            return view('/');
        }
    }
}
