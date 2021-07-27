@extends('layouts.admin')

@section('content')


<div class="card shadow mb-4">
    <div class="card-header py-3 ">
        <h4 class="m-0 font-weight-bold  text-primary">{{$title}} <p></p>
        <a class="btn btn-primary btn-sm float-left" href="{{route('product.index')}}">Back</a>
        </h4>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <tbody>
                    <tr>
                        <th>Barcode</th>
                        <td>:</td>
                        <td>
                            {!! \DNS1D::getBarcodeHTML($product->code, 'c128'); !!}
                           
                            </td>
                        
                        <th>Name Item</th>
                        <td>:</td>
                        <td>{{$product->name}}</td>
                    </tr>                    
                    <tr>
                        <th>Supplier</th>
                        <td>:</td>
                        <td>{{$product->supplier->name}}</td>

                        <th>Code</th>
                        <td>:</td>
                        <td>{{$product->code}}</td>
                    </tr>
                    <tr>                    
                        <th>Stock</th>
                        <td>:</td>
                        <td>{{$product->stock}}</td>

                        <th>Stock Minimum</th>
                        <td>:</td>
                        <td>{{$product->stock_minimum}}</td>
                    </tr>
                    <tr>                    
                        <th>Created At</th>
                        <td>:</td>
                        <td>{{$product->created_at}}</td>

                        <th>Updated At</th>
                        <td>:</td>
                        <td>{{$product->updated_at}}</td>
                    </tr>
                    <tr >
                        <th>Selling Price</th>
                        <td>:</td>
                        <td> Rp. {{ number_format($product->price,0) }}</td>

                        <th>Purchase Price</th>
                        <td>:</td>
                        <td> Rp. {{ number_format($product->purchase_price,0) }}</td>
                    </tr>

                </tbody>
            </table>
        </div>
    </div>
</div>
    
@endsection