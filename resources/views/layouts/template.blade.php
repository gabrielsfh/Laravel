<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>

    <link rel="stylesheet" href="{{ asset('css/lib/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('css/lib/tailwind.css') }}">
    <link rel="stylesheet" href="{{ asset('css/lib/bootstrapTwitter.css') }}">
    <link rel="stylesheet" href="{{ asset('css/lib/dataTables.bootstrap4.css') }}">
    <link rel="stylesheet" href="{{ asset('css/lib/font-awesome.css') }}">

    <script src="{{ asset('js/lib/jquery-3.5.1.slim.js' ) }}"></script>
    <script src="{{ asset('js/lib/popper.js') }}"></script>
    <script src="{{ asset('js/lib/bootstrap.js') }}"></script>

    <!-- Scripts DataTables -->
    <link rel="stylesheet" href="{{ asset('datatables/dataTables.bootstrap4.min.css') }}" >
    <script src="{{ asset('datatables/jquery.dataTables.min.js')}}"></script>
    <script src="{{ asset('datatables/dataTables.bootstrap4.min.js')}}"></script>
    <script src="{{ asset('datatables/datatables-demo.js') }}"></script>

    
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="./">Home</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
            <a class="nav-link" href="{{route('produtos')}}">Produtos<span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="clientes">Clientes</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="usuarios">Usuários</a>
        </li>
    
        </ul>
        <form class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
    </div>
    </nav>
    @yield('content') 
</body>
</html>