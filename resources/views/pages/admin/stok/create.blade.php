@extends('layouts.admin')
@section('content')

    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">
            Stock
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
                                Tambah Stock
                            </h6>
                        </div>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{route('stock.store')}}"  enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="barangmasuk_id">Nama Barang</label>
                            <select name="barangmasuk_id" id="barangmasuk_id" class="form-control">
                                <option value="">pilih</option>
                                @foreach ($barangs as $barang)
                                    <option value="{{$barang->id}}">{{$barang->name}}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="stok">Stok</label>
                            <input type="number" class="form-control" id="stok" id="stok" placeholder="Masukkan Stok" name="stok">
                        </div>

                            <button type="submit" class="btn btn-primary">Add</button>

                        </form>
                        @if ($errors->any())
                        <div class="alert alert-danger my-4" role="alert">
                            <button class="close" type="button" data-dismiss= "alert" aria-label="Close">
                                <span aria-hidden="true">x</span>
                            </button>
                            @foreach ($errors->all() as $error)
                            {{$error}}</br>
                                
                            @endforeach
                        </div>
                            
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>

    
@endsection