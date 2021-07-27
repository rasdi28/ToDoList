@extends('layouts.admin')
@section('content')

    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">
            Product
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
                                Add Product
                            </h6>
                        </div>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{route('product.store')}}"  enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="supplier_id">Name Supplier</label>
                            <select name="supplier_id" id="supplier_id" class="form-control">
                                <option value="">pilih</option>
                                @foreach ($suppliers as $supplier)
                                    <option value="{{$supplier->id}}">{{$supplier->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="name">Name Item</label>
                            <input type="text" class="form-control" id="name" id="name" placeholder="Insert Item" name="name">
                        </div>
                        <div class="form-group">
                            <label for="stock_minimum">Stock Minimum</label>
                            <input type="number" class="form-control" id="stock_minimum" id="stock_minimum" placeholder="Insert Stock Minimum" name="stock_minimum">
                        </div>
                        <div class="form-group">
                            <label for="price">Selling Price</label>
                            <input type="number" class="form-control" id="price" id="price" placeholder="Price" name="price">
                        </div>
                        <div class="form-group">
                            <label for="purchase_price">Purchase Price</label>
                            <input type="number" class="form-control" id="purchase_price" id="purchase_price" placeholder="Price" name="purchase_price">
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