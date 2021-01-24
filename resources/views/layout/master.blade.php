<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title ?? 'Ngoding Bareng' }}</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
   
</head>
<body>
@include('layout.navigation')

    <div class="py-4">
        @include('alert') 
        @yield('content')

    </div>
     
    
</body>
</html>