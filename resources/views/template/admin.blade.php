<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/dataTables.bootstrap5.min.css">
        @vite('resources/sass/app.scss')
</head>

{{-- navbar  --}}
<body>
    <nav class="navbar navbar-expand-lg bg-primary">
        <div class="container">
            <a class="text-white navbar-brand" href="#">Navbar</a>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="text-white nav-link" href="{{ url('/admin') }}">Dashboard</a>
                    </li>
                    <li class="nav-item">
                        <a class="text-white nav-link" href="{{ url('/admin/tambah-data') }}">Tambah Data</a>
                    </li>
                </ul>
            </div>


            @if (Auth::check()) {{-- untuk meriksa apakah user udah ter autentifikasi aau login --}}
                <a class="btn btn-light" href="{{ url('/logout') }}">Logout</a>
                 {{-- kalau udah bakal nampilin nilai benar dan tombol pojok akan bertuliskan logout --}}
            @else
                <a class="btn btn-light" href="{{ url('/login') }}">Login</a>
                {{-- kalau engga, bakal lari kesini dan tulisannya tetep login  --}}
            @endif
        </div>
    </nav>

    @yield('content')
    @vite('resources/js/app.js')
    @include('sweetalert::alert')
    @stack('scripts')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>

</body>

</html>

