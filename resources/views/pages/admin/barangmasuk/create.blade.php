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
                        <form method="POST" action="{{route('barangmasuk.store')}}"  enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="name">Nama Barang</label>
                            <input type="text" class="form-control" id="name" placeholder="Enter your Barang" name="name" >
                        </div>
                        <div class="form-group">
                            <label for="category_id">Category</label>
                            <select name="category_id" id="category_id" class="form-control">
                                <option value="">pilih</option>
                                @foreach ($categories as $categories)
                                    <option value="{{$categories->id}}">{{$categories->name}}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="description">Deskripsi barang</label>
                            <input type="text" class="form-control" id="description" id="description" placeholder="Enter Your Description" name="description">
                        </div>

                         <div class="form-group">
                            <div class="col-md-12 mb-2">
                                <img id="preview-image-before-upload" src="https://www.riobeauty.co.uk/images/product_image_not_found.gif"
                                alt="preview image" style="max-height: 250px;">
                            </div>
                                <label for="image">Insert Image Items</label>
                                <input type="file" name="image" accept="image/*" class="form-control-file" id="image">
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


@push('after-script')
<script type="text/javascript">
    $(document).ready(function (e) {
       $('#image').change(function(){
        let reader = new FileReader();
        reader.onload = (e) => { 
          $('#preview-image-before-upload').attr('src', e.target.result); 
        }
        reader.readAsDataURL(this.files[0]); 
       });
    });
</script>
@endpush