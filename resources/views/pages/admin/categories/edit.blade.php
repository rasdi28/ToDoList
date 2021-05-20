@extends('layouts.admin')

@section('content')
<div class="container-fluid">
    <div class="card">
        <div class="card-header">
            <h4 class="m-0 font-weight-bold text-secondary">
                Ubah Data
            </h4>
        </div>
        <div class="card-body card-block">
            <form action="{{route('category.update',$category->id)}}" method="POST" enctype="multipart/form-data">
                @method('PUT')
                @csrf
                <div class="form-group">
                    <label for="name" class="form-control-lable">Name</label>
                    <input type="text" class="form-control" name="name" value="{{old('name') ? old('name'): $category->name}}">
                </div>
                <div class="form-group">
                    <button class="btn btn-primary btn-block" type="submit">
                        Update Data
                    </button>
                </div>

            </form>
        </div>
    </div>
</div>
    
@endsection