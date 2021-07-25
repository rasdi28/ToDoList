@extends('layouts.admin')

@section('content')


<div class="card shadow mb-4">
    <div class="card-header py-3 ">
        <h4 class="m-0 font-weight-bold text-primary">{{$title}}
        <a class="btn btn-primary btn-sm float-right" href="{{route('supplier.create')}}">Tambah Data</a>
        </h4>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Name Supplier</th>
                        <th>Address</th>
                        <th>No Telp</th>
                        <th>Action</th>

                    </tr>
                </thead>
                
                <tbody>
                @forelse ($suppliers as $supplier)
                <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>{{$supplier->name}}</td>
                    <td>{{$supplier->address}}</td>
                    <td>{{$supplier->no_telp}}</td>
                    <td class="justify-content-center" style="border-radius:2; ml-2">
                        <form action="{{route('supplier.destroy', $supplier->id)}}" method="POST">
                            
                            <a href="{{route('supplier.edit',$supplier->id)}}" class="btn btn-secondary">Edit</a>
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger ml-2" style="border-radius:2" href="{{route('supplier.destroy',$supplier->id)}}" onclick="return confirm('Yakin hapus data Barang ?')">
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