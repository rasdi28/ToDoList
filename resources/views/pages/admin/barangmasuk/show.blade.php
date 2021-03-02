@extends('layouts.admin')

@section('content')
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Items</h1>
    </div>

    <div class="row">
         <!-- Area Chart -->

         <div class="col-xl-12 col-lg-12">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <div class="row">
                        <a href="{{ route('barangmasuk.index') }}" class="btn btn-primary">Back</a>
                    </div>
                </div>

                <div class="card-body">
                    <div class="card shadow">
                        <img class="card" style="height: 250px" src="{{asset($item->image)}}">
                        <h3 class="font-weight-bold">{{$item->name}}</h3>
                        <p>{{$item->description}}</p>
                        </div>                  
                        
                    </div>
                </div>
            </div>
        </div>
    
@endsection