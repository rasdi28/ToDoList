@extends('layouts.admin')

@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">

        
       {{-- form --}}
        <div class="card">
            <div class="card-header">
                <h4 class="m-0 font-weight-bold text-primary">Ubah data</h4>
            </div>
    
            <div class="card-body card-block">
                <form action="{{route('barangmasuk.update', $item->id)}}" method="POST" enctype="multipart/form-data">
                    @method('PUT')
                    @csrf

                    <div class="form-group">
                        <label for="name" class="form-control-lable">Title</label>
                        <input type="text" class="form-control" name="title" value="{{old('name') ? old('name'): $item->name}}">
                    </div>
    
                    <div class="form-group">
                        <label for="description" class="form-control-lable"> Description</label>
                        <input type="text" class="form-control" name="description" value="{{old('description') ? old('description'): $item->description}}">
                    </div>

                    <div class="form-group">
                        <label for="image" class="form-control-label">Icon</label>
                        <input type="file" name="image" accept="image/*" required class="form-control @error('image') is-invalid @enderror">
                        @error('image')
                            <div class="text-muted">{{ $message }}</div>
                        @enderror
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