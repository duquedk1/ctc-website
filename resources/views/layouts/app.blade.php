<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>

<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white fixed-top shadow-sm py-3">
            <div class="container">
                <a class="navbar-brand font-weight-bold" href="{{ url('/') }}">
                    <h3>Career Training College</h3>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a class="nav-link font-weight-bold" href="{{ url('/') }}">{{ __('Home') }}</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link font-weight-bold" href="{{ route('about') }}">{{ __('About Us') }}</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link font-weight-bold"
                                href="{{ route('events') }}">{{ __('Next Events') }}</a>
                        </li>
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="btn btn-outline-primary me-2"
                                        href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="btn btn-primary" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle font-weight-bold" href="#"
                                    role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                                    v-pre>
                                    {{ Auth::user()->name }} <i class="fas fa-user"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end border-0 shadow">
                                    <a class="dropdown-item"
                                        href="{{ route('admin') }}">{{ __('Visitor list') }}</a>
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                       document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }} <i class="fas fa-sign-out-alt"></i>
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <!-- Añade margen superior al contenido principal para evitar que se superponga -->
        <div style="margin-top: 90px;">
            <!-- Aquí va el contenido principal de la página -->
        </div>



        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
<!-- Footer-->
<footer class="bg-dark text-white text-center py-3 mt-auto">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <h5 class="text-uppercase mb-4 font-weight-bold text-warning">College Training Center</h5>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt earum quae iusto consectetur ipsa
                    neque animi consequatur quos unde sint.</p>
            </div>
            <div class="col-md-2">
                <h5 class="text-uppercase mb-4 font-weight-bold text-warning">Productos</h5>
                <ul class="list-unstyled">
                    <li><a href="#" class="text-white">Product 1</a></li>
                    <li><a href="#" class="text-white">Product 2</a></li>
                    <li><a href="#" class="text-white">Product 3</a></li>
                    <li><a href="#" class="text-white">Product 4</a></li>
                </ul>
            </div>
            <div class="col-md-3">
                <h5 class="text-uppercase mb-4 font-weight-bold text-warning">Useful Links</h5>
                <ul class="list-unstyled">
                    <li><a href="#" class="text-white">Link 1</a></li>
                    <li><a href="#" class="text-white">Link 2</a></li>
                    <li><a href="#" class="text-white">Link 3</a></li>
                    <li><a href="#" class="text-white">Help</a></li>
                </ul>
            </div>
            <div class="col-md-4">
                <h5 class="text-uppercase mb-4 font-weight-bold text-warning">Contact</h5>
                <ul class="list-unstyled">
                    <li><i class="fas fa-home mr-3"></i> Perth, WA</li>
                    <li><i class="fas fa-envelope mr-3"></i> info@example.com</li>
                    <li><i class="fas fa-phone mr-3"></i> +61 8 1234 5678</li>
                    <li><i class="fas fa-print mr-3"></i> +61 8 1234 5679</li>
                </ul>
            </div>
        </div>
        <hr class="my-4">
        <div class="row">
            <div class="col-md-7">
                <p class="mb-0">© 2024 All rights reserved by:
                    <a href="#" class="text-warning"><strong>The Providers</strong></a>
                </p>
            </div>
            <div class="col-md-5">
                <div class="text-center text-md-right">
                    <ul class="list-unstyled list-inline">
                        <li class="list-inline-item">
                            <a href="#" class="btn-floating btn-sm text-white" style="font-size: 23px"><i
                                    class="fab fa-facebook"></i></a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#" class="btn-floating btn-sm text-white" style="font-size: 23px"><i
                                    class="fab fa-linkedin"></i></a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#" class="btn-floating btn-sm text-white" style="font-size: 23px"><i
                                    class="fab fa-google"></i></a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#" class="btn-floating btn-sm text-white" style="font-size: 23px"><i
                                    class="fab fa-instagram"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>

</html>
