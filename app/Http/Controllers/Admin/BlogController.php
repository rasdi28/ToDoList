<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        return Blog::all();
    }
    
    public function store(Request $request)
    {
        $blog = $request->all();
        return Blog::create($blog);
    }
    
    public function show($id)
    {
        $blog = Blog::find($id);
        return $blog;
    }

    public function update(Request $request, $id)
    {
        $blog_baru = $request->all();
        $blog = Blog::find($id);
        $blog->update($blog_baru);
        return response()->json($blog);

    }

    public function destroy($id)
    {
        $blog = Blog::find($id);
        $blog->delete();
        return response()->json('selamat data sudah dihapus');
    }
}
