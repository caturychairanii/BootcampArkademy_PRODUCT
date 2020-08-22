<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Produk || Arkademy</title>
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
</head>
<body>
    
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a href="#" class="navbar-brand">Arkademy</a>
        {{-- <button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigat" >
            <span class="navbar-toggle-icon">#</span>
        </button> --}}

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto"> 
                <li class="nav-item active">
                    <a href="/produk" class="nav-link" >Produk</a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="main-content">
        <div class="section__content section__content--p30">
            <div class="container-fluid">
                @yield('content')
            </div>
        </div>
    </div>

</body>
</html>