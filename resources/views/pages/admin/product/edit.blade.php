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
                        <form method="POST" action="{{route('product.update',$product->id)}}"  enctype="multipart/form-data">
                        @method('PUT')
                            @csrf

                        <div class="form-group">
                             <label for="supplier_id">Supplier</label>
                            <select class="form-control" @error('supplier_id') is-invalid @enderror" name="supplier_id" value="" id="supplier_id">
                                @foreach ($supplier as $supplier)
                                <option value="{{ $supplier->id }}">{{ $supplier->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="name">Nama</label>
                            <input type="text" class="form-control" id="name" placeholder="Nama Item" name="name" value="{{old('name') ? old('name') : $product->name }}" >
                        </div>
                        <div class="form-group">
                            <label for="code">Code</label>
                            <input type="text" class="form-control" id="code" placeholder="code" name="code" value="{{old('code') ? old('code') : $product->code}}" readonly >
                        </div>
                
                        <div class="form-group">
                            <label for="stock_minimum">Stock Minimum</label>
                            <input type="text" class="form-control" id="stock_minimum" name="stock_minimum" value="{{old('stock_minimum') ? old('stock_minimum') : $product->stock_minimum}} " >
                        </div>
                        <div class="form-group">
                            <label for="price">Harga Jual</label>
                            <input type="text" class="form-control" id="price" name="price" value="{{old('price') ? old('price') : $product->price}} " >
                        </div>
                        <div class="form-group">
                            <label for="purchase_price">Harga Beli</label>
                            <input type="text" class="form-control" id="purchase_price" name="purchase_price" value="{{old('purchase_price') ? old('purchase_price') : $product->purchase_price}} " >
                        </div> 
        
                        <button type="submit" class="btn btn-primary">Add</button>

                    </div>
                </div>
            </div>
        </div>
    </div>

    
@endsection

