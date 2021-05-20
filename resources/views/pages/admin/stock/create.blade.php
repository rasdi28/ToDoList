@extends('layouts.admin')

@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">

        
       {{-- form --}}
        <div class="card">
            <div class="card-header">
                <h4 class="m-0 font-weight-bold text-primary">Banafit Detail</h4>
            </div>
    
            <div class="card-body card-block">
                <form action="{{route('stock.store')}}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="form-group">
                        <label for="benefit" class="form-control-lable">Nama barang </label>
                        <select name="benefit_id" class="form-control  @error('benefit_id') is-invalid @enderror">
                            @foreach ($barang as $stock)
                                <option value="{{ $stock->id }}">{{ $stock->name }}</option>
                            @endforeach
                        </select>
                    </div>
    
                    <div class="form-group">
                        <button class="btn btn-primary btn-block" type="submit">
                            Tambah Data
                        </button>
                    </div>
                </form>
            </div>
        </div>
     

    </div>



    
@endsection