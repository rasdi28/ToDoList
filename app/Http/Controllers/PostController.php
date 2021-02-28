<?php

namespace App\Http\Controllers;
use App\Post;
use Illuminate\Http\Request;
use App\Http\Requests\PostRequest;

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
    
   

    public function store(Request $request)
    {
        $title = $request->title;
        $body = $request->body;
        $image = 'storage/'.$request->file('imagez')->store(
                 'assets/blog', 'public'
            );
        $attr['slug'] = \Str::slug(request('title'));
        echo $attr['slug'];
        echo $image;
        //validate the field
        // $attr = $this->validateRequest();

        
        
        // assign title to the slug
        $attr = $request->all();
        // $attr['slug'] = Str::slug(request('title'));
        
        // $attr['image'] = 'storage/'.$request->file('image')->store(
        //     'assets/blog', 'public'
        // );
        // create a new post
        // echo $attr;
        // Post::create($attr);
        // session()->flash('success','The Post Was Created');
        // session()->flash('error','The Post Errroer');
        
        // return redirect()->route('posts.index');

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
            
           

    //     ]);
    // }


    public function destroy(Post $post)
    {
        $post->delete();
        session()->flash("success", "The Pos Was Delete");
        return redirect('posts');

    }


}
