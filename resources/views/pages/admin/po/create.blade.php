@extends('layouts.admin')
@section('content')

    <div class="d-sm-flex align-pos-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">
            Purchase Order
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
                                Create Purchase Order
                            </h6>
                        </div>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{route('po.store')}}"  enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="product_id">Product</label>
                            <select name="product_id" id="product_id" class="form-control">
                                <option value="">pilih</option>
                                @foreach ($products as $product)
                                    <option value="{{$product->id}}">{{$product->name}}</option>
                                @endforeach
                            </select>
                        </div>

                       
<select class="combobox">
    <option></option>
    <option value="PA">Pennsylvania</option>
    <option value="CT">Connecticut</option>
    <option value="NY">New York</option>
    <option value="MD">Maryland</option>
    <option value="VA">Virginia</option>
  </select>

                        <div class="form-group">
                            <label for="stock">Harga</label>
                            <input type="number" class="form-control" id="stock" placeholder="stock" name="stock" >
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