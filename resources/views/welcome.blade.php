<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>
        <!-- CSS only -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <style>
            .navbar-color{
                color: saddlebrown;
            }
        </style>
    </head>
    <body style="background-color: moccasin;">
        <header class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom sticky-top top 0" style="background-color: burlywood;">
            <ul class="nav nav-pills">
                <li class="nav-item"><a class="nav-link navbar-color fw-bold" href="{{route('uts.home')}}">Home</a></li>
                <li class="nav-item"><a class="nav-link navbar-color fw-bold" href="{{route('uts.inisialisasi')}}">Inisialisasi</a></li>
                <li class="nav-item"><a class="nav-link navbar-color fw-bold" href="{{route('uts.idolaku')}}">Idolaku</a></li>
            </ul>
        </header>
        <div class="container">
           @yield('content') 
        </div>
        
    </body>
</html>
