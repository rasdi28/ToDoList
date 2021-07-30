@extends('layouts.admin')

@section('content')


<div class="card shadow mb-4">
    <div class="card-header py-3 ">
        <h4 class="m-0 font-weight-bold text-primary">Data Stoc
        <a class="btn btn-primary btn-sm float-right" href="{{route('stock.create')}}">Tambah Data</a>
        </h4>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Name</th>
                        <th>Action</th>
                        <th>Quantity</th>
                    </tr>
                </thead>
                
                <tbody>
                @forelse ($stocks as $stock)
                <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>{{$stock->barangmasuk_id}}</td>
                    <td>{{$stock->category_id}}</td>
                    <td>{{$stock->qty}}</td>
        
                    {{-- <td class="justify-content-center" style="border-radius:2; ml-2">
                        <form action="{{route('barangmasuk.destroy',$category->id)}}" method="POST">
                            <a href="{{route('barangmasuk.show',$category->id)}}" class="btn btn-primary" >Show</a>
                            <a href="{{route('barangmasuk.edit',$category->id)}}" class="btn btn-secondary">Edit</a>
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger ml-2" style="border-radius:2" href="{{route('barangmasuk.destroy',$category->id)}}" onclick="return confirm('Yakin hapus data Barang ?')">
                                Delete
                            </button>
                        </form>

                    </td> --}}


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