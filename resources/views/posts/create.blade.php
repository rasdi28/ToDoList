@extends('layouts.app',['title'=>'New Post'])

@section('content')

    <div class="container">
    <div class="row">
       <div class="col-md-6">
          @include('alert')
        
            <div class="card">
                <div class="card-header">New Post</div>
                <div class="card-body"></div>
                <form action="/posts/store" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="title">Title</label>
                        <input type="text" name="title" id="title" class="form-control" value="{{ old('title') }}">
                        @error('title')
                            <div class="text-danger mt-2">

                                {{ $message }}

                            </div>
                        
                        @enderror

                        
                    </div>
                    <div class="form-group">
                        <label for="body">Body</label>
                        <textarea name="body" id="body" class="form-control">{{ old('body') }} </textarea>
                        @error('body')
                        <div class="text-danger mt-2">

                            {{ $message }}

                        </div>
                    
                        @enderror
                    
                    </div>
                    <button type="submit" class="btn btn-primary">Create</button>

                </form>
            </div>   
        </div> 
    </div>
</div>


@stop