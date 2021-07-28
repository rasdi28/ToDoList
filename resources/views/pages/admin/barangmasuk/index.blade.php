@extends('layouts.admin')

@section('content')


<div class="card shadow mb-4">
    <div class="card-header py-3 ">
        <h4 class="m-0 font-weight-bold text-primary">Data Barang Masuk
        <a class="btn btn-primary btn-sm float-right" href="{{route('barangmasuk.create')}}">Tambah Data</a>
        </h4>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Name</th>
                        <th>Description</th>
                        <th>Category</th>
                        <th>Stock</th>
                        <th>Gambar</th>

                        <th>Action</th>

                    </tr>
                </thead>
                
                <tbody>
                @forelse ($items as $item)
                <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>{{$item->name}}</td>
                    <td>{{$item->description}}</td>
                    <td>{{$item->categories->name}}</td>
                    <td>{{$item->stock}}</td>

                    <td>
                        <img src="{{asset($item->image)}}" alt="photo" class="ml-auto mr-auto mt-3" width="50px">
                    </td>
                    <td class="justify-content-center" style="border-radius:2; ml-2">
                        <form action="{{route('barangmasuk.destroy',$item->id)}}" method="POST">
                            <a href="{{route('barangmasuk.show',$item->id)}}" class="btn btn-primary" >Show</a>
                            <a href="{{route('barangmasuk.edit',$item->id)}}" class="btn btn-secondary">Edit</a>
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger ml-2" style="border-radius:2" href="{{route('barangmasuk.destroy',$item->id)}}" onclick="return confirm('Yakin hapus data Barang ?')">
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