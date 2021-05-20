@extends('layouts.admin')

@section('content')

<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h4 class="m-0 font-weight-bold test-primary">
            Data Stocl
        <a href="" class="btn btn-primary btn-sm float-right"></a>
        </h4>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Barang</th>
                        <th>Kategori</th>
                        <th>Stok</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($stocks as $stok)
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{$stok->barangmasuk->name}}</td>
                        </tr>
                    @empty
                        
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>



@endsection