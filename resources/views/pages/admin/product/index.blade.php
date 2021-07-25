@extends('layouts.admin')

@section('content')


<div class="card shadow mb-4">
    <div class="card-header py-3 ">
        <h4 class="m-0 font-weight-bold text-primary">{{$title}}
        <a class="btn btn-primary btn-sm float-right" href="{{route('product.create')}}">Tambah Data</a>
        </h4>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Name Supplier</th>
                        <th>Name Item</th>
                        <th>Code</th>
                        <th>Stock</th>
                        <th>Stock Minimum</th>
                        <th>Action</th>

                    </tr>
                </thead>
                
                <tbody>
                @forelse ($products as $product)
                <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>{{$product->supplier->name}}</td>
                    <td>{{$product->name}}</td>
                    <td>{{$product->code}}</td>
                    <td>{{$product->code}}</td>
                    <td>{{$product->stock_minimum}}</td>
                    <td class="justify-content-center" style="border-radius:2; ml-2">
                        <form action="{{route('product.destroy', $product->id)}}" method="POST">
                            
                            <a href="{{route('product.edit',$product->id)}}" class="btn btn-secondary">Edit</a>
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger ml-2" style="border-radius:2" href="{{route('product.destroy',$product->id)}}" onclick="return confirm('Yakin hapus data Barang ?')">
                                Delete
                            </button>
                        </form>

                    </td>


                </tr>
                    


                @empty
                   <tr>
                       <td colspan="3" class="text-center">
                           <h3>Data Kosong</h3>
                       </td>
                   </tr>
                @endforelse
                
                    
                 
                </tbody>
            </table>
        </div>
    </div>
</div>
    
@endsection