@extends('layouts.admin')
@section('content')

    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">
            Items
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
                                Create Items
                            </h6>
                        </div>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{route('item.store')}}"  enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="nama">Nama Item</label>
                            <input type="text" class="form-control" id="nama" placeholder="Nama Item" name="nama" >
                        </div>
                        <div class="form-group">
                            <label for="kuantitas">Kuantitas</label>
                            <input type="number" class="form-control" id="kuantitas" placeholder="Kuantitas" name="kuantitas" >
                        </div>
                        <div class="form-group">
                            <label for="satuan">Satuan</label>
                            <input type="text" class="form-control" id="satuan" placeholder="Satuan" name="satuan" >
                        </div>
                        <div class="form-group">
                            <label for="harga">Harga</label>
                            <input type="number" class="form-control" id="harga" placeholder="harga" name="harga" >
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