@extends('layouts.admin')

@section('content')


<div class="card shadow mb-4">
    <div class="card-header py-3 ">
        <h4 class="m-0 font-weight-bold text-primary"> Tukang Sayur
        <a class="btn btn-primary btn-sm float-right" href="{{route('tukangsayur.create')}}">Tambah Data</a>
        </h4>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Name</th>
                        <th>Alamat</th>
                        <th>Action</th>

                    </tr>
                </thead>
                
                <tbody>
                @forelse ($tukangsayurs as $tukangsayur)
                <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>{{$tukangsayur->nama}}</td>
                    <td>{{$tukangsayur->alamat}}</td>
                    <td class="justify-content-center" style="border-radius:2; ml-2">
                        <form action="{{route('tukangsayur.destroy',$tukangsayur->id)}}" method="POST">
                            <a href="{{route('tukangsayur.edit',$tukangsayur->id)}}" class="btn btn-secondary">Edit</a>
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger ml-2" style="border-radius:2" href="{{route('tukangsayur.destroy',$tukangsayur->id)}}" onclick="return confirm('Yakin hapus data Barang ?')">
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