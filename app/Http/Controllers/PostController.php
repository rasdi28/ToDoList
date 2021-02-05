<?php

namespace App\Http\Controllers;
use App\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except([
            'index','show'
        ]);
    }

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
        $attr = $this->validateRequest();
        
        // assign title to the slug

        $attr['slug'] = \Str::slug(request('title'));
        
        // create a new post

        Post::create($attr);
        session()->flash('success','The Post Was Created');
        // session()->flash('error','The Post Errroer');
        
        
        return redirect('posts');
    }

    public function edit(Post $post)
    {
        return view('posts.edit',compact('post'));
    }

    public function update(Post $post)
    {
        
       $attr = $this->validateRequest();

        $post->update($attr);
        session()->flash('success','The Post Was Updated');
        // session()->flash('error','The Post Errroer');
        
        
        return redirect('posts');

    
    }

    public function validateRequest()
    {
        return request()->validate([
            'title'=>'required|min:3',
            'body'=>'required',
            
           

        ]);
    }


    public function destroy(Post $post)
    {
        $post->delete();
        session()->flash("success", "The Pos Was Delete");
        return redirect('posts');

    }


}
