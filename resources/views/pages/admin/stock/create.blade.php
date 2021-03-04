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
                <form action="{{route('benefitdetail.store')}}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="form-group">
                        <label for="icon" class="form-control-label">Icon</label>
                        <input type="file" name="icon" accept="image/*" required class="form-control @error('type') is-invalid @enderror">
                        @error('icon')
                            <div class="text-muted">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="title" class="form-control-lable">Title</label>
                        <input type="text" class="form-control" name="title">
                    </div>

                    <div class="form-group">
                        <label for="short_description" class="form-control-lable">Short Description</label>
                        <input type="text" class="form-control" name="short_description">
                    </div>

                    {{-- Pilih Benefit --}}
                    <div class="form-group">
                        <label for="benefit" class="form-control-lable">Benefit </label>
                        <select name="benefit_id" class="form-control  @error('benefit_id') is-invalid @enderror">
                            @foreach ($data as $benefit)
                                <option value="{{ $benefit->id }}">{{ $benefit->title }}</option>
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