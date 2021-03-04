@extends('layouts.admin')
@section('content')

    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">
            Tambah Category
        </h1>
    </div>

    <div class="row">
        <div class="col-xl-12 col-lg-12">
            <div class="card shadow mb-4">
                {{-- card header --}}
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <div class="row">
                            <h6 class="m-0 font-weight-bold text-primary">
                                Tambah Category
                            </h6>
                        </div>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{route('category.store')}}"  enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="name">Category Name</label>
                            <input type="text" class="form-control" id="name" placeholder="Enter your Category" name="name" >
                        </div>
                        
                        <button type="submit" class="btn btn-primary">Add</button>

                        </form>
                        @if ($errors->any())
                        <div class="alert alert-danger my-4" role="alert">
                            <button class="close" type="button" data-dismiss= "alert" aria-label="Close">
                                <span aria-hidden="true">x</span>
                            </button>
                            @foreach ($errors->all() as $error)
                            {{$error}}</br>
                                
                            @endforeach
                        </div>
                            
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>

    
@endsection
