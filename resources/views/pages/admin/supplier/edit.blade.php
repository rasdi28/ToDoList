@extends('layouts.admin')
@section('content')

    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">
            Edit Supplier
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
                                Update Supplier
                            </h6>
                        </div>
                    </div>
                    
                    <div class="card-body">
                        <form method="POST" action="{{route('supplier.update',$supplier->id)}}"  enctype="multipart/form-data">
                        @method('PUT')
                            @csrf
                        <div class="form-group">
                            <label for="name">Nama Item</label>
                            <input type="text" class="form-control" id="name" placeholder="Nama Item" name="name" value="{{old('name') ? old('name') : $supplier->name }}" >
                        </div>
                        <div class="form-group">
                            <label for="address">Address</label>
                            <input type="text" class="form-control" id="address" placeholder="address" name="address" value="{{old('address') ? old('address') : $supplier->address}}" >
                        </div>
                        <div class="form-group">
                            <label for="no_telp">number telephon</label>
                            <input type="text" class="form-control" id="no_telp" name="no_telp" value="{{old('no_telp') ? old('no_telp') : $supplier->no_telp}} " >
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