@extends('layouts.app',['title'=>'Update'])

@section('content')

    <div class="container">
    <div class="row">
       <div class="col-md-6">
          @include('alert')
        
            <div class="card">
                <div class="card-header">Update Post: {{ $post->title }}</div>
                <div class="card-body"></div>
                <form action="/posts/{{ $post->slug }}/edit" method="post">
                    @method('patch')
                    @csrf
                    <div class="form-group">
                        <label for="title">Title</label>
                        <input type="text" name="title" id="title" class="form-control" value="{{ old('title')?? $post->title }}">
                        @error('title')
                            <div class="text-danger mt-2">

                                {{ $message }}

                            </div>
                        
                        @enderror

                        
                    </div>
                    <div class="form-group">
                        <label for="body">Body</label>
                        <textarea name="body" id="body" class="form-control">{{ old('body') ?? $post->body }} </textarea>
                        @error('body')
                        <div class="text-danger mt-2">

                            {{ $message }}

                        </div>
                    
                        @enderror
                    
                    </div>
                    <button type="submit" class="btn btn-primary">Update</button>

                </form>
            </div>   
        </div> 
    </div>
</div>


@stop