@extends('layouts.admin')
@section('content')

    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">
            Barang Masuk
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
                                Tambah Barang Masuk
                            </h6>
                        </div>
                    </div>
                    <div class="card-body">
                        <form action="" method="" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="name">Nama Barang</label>
                            <input type="text" class="form-control" id="name" placeholder="Enter your Barang" name="name" >
                        </div>

                        <div class="form-group">
                            <label for="description">Deskripsi barang</label>
                            <input type="text" class="form-control" id="description" id="description" placeholder="Enter Your Description">
                        </div>


                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    
@endsection