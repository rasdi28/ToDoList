<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        
        return view('posts.index', [
            'posts'=>Post::latest()->paginate(6),
        ]);
    }

    public function show(Post $post)
    {
        return view('posts.show',compact('post'));
    }
    public function create()
    {
        return view('posts.create');
    }

    public function store()
    {
        //validate the field
        $attr = request()->validate([
            'title'=>'required|min:3',
            'body'=>'required',

        ]);
        // assign title to the slug

        $attr['slug'] = \Str::slug(request('title'));
        
        // create a new post

        Post::create($attr);
        session()->flash('success','The Post Was Created');
        // session()->flash('error','The Post Errroer');
        
        
        return redirect('posts');
    }
}
