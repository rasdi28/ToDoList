@extends('layouts.admin')
@section('content')

    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">
            Edit Kategory
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
                               Update Category
                            </h6>
                        </div>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{route('category.update', $category->id)}}"  enctype="multipart/form-data">
                        @method('PUT')
                        @csrf
                        
                        <div class="form-group">
                            <label for="name">Nama Pelanggan</label>
                            <input type="text" class="form-control" id="name" placeholder="Nama" name="name" value="{{old('name') ? old('name') : $category->name }}" >
                        </div>

                        <button type="submit" class="btn btn-primary">Add</button>

                    </div>
                </div>
            </div>
        </div>
    </div>

    
@endsection


@push('after-script')

@endpush