@extends('layout.master')
@section('title','Login')
@section('content')
    
    <div class="container">
        <div class="row justify-content-center align-items-center" style="height: 80vh">
            <div class="col-md-5">
                <div class="alert alert danger" role="alert">
                    Data Telah di simpan
                </div>
               <div class="card">
                   <div class="card-body">
                        <div class="card-header">
                            <h4>Login</h4>
                
                        </div>
                       <form action="" autocomplete="off">
                           <div class="form-group">
                                <label for="email">Email Address</label>
                                <input type="text" name="email" id="email" class="form-control {{$errors->has('email') ? 'is-invalid' :'' }}">
                                <span class="invalid-feedback">Sorry, the email couldn't be found</span>
                            </div>
                            <div class="form-group">
                                <label for="Password">Password</label>
                                <input type="password" name="password" id=password"" class="form-control">
                            </div>
                            <button type="submit" class="btn btn-primary">Login</button>
                            
                        </form>
                   </div>
               </div>
            </div>
        </div>
    </div>
    
@endsection