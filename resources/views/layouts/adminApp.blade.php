<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Armata&family=Open+Sans+Condensed:wght@300;700&display=swap"
        rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
        integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <script src="{{ asset('js/app.js') }}" defer></script>
</head>

<body>
    {{-- @include('partials.header') --}}

    <main>
        <div class="admin_main d-flex">
            <div class="d-flex flex-column flex-shrink-0 p-3 text-white bg-dark" style="width: 280px;">
                <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none">
                    <svg class="bi me-2" width="40" height="32">
                        <use xlink:href="#bootstrap"></use>
                    </svg>
                    <span class="fs-4">Dashboard</span>
                </a>
                <hr>
                <ul class="nav nav-pills flex-column mb-auto">
                    <li class="nav-item">
                        <a href="{{ route('home') }}" class="nav-link text-white">
                            Home
                        </a>
                    </li>
                    <li>
                        <a href="#" class="nav-link text-white">
                            Characters
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('comics.index') }}" class="nav-link text-white">
                            Comics
                        </a>
                    </li>
                    <li>
                        <a href="#" class="nav-link text-white">
                            Movies
                        </a>
                    </li>
                    <li>
                        <a href="#" class="nav-link text-white">
                            Television
                        </a>
                    </li>
                    <li>
                        <a href="#" class="nav-link text-white">
                            Games
                        </a>
                    </li>
                    <li>
                        <a href="#" class="nav-link text-white">
                            Collectibles
                        </a>
                    </li>
                    <li>
                        <a href="#" class="nav-link text-white">
                            Videos
                        </a>
                    </li>
                    <li>
                        <a href="#" class="nav-link text-white">
                            Fans
                        </a>
                    </li>
                    <li>
                        <a href="#" class="nav-link text-white">
                            News
                        </a>
                    </li>
                    <li>
                        <a href="#" class="nav-link text-white">
                            Shop
                        </a>
                    </li>
                </ul>
                <hr>
                <div class="dropdown">
                    <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle"
                        id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
                        <strong>ADMIN</strong>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-dark text-small shadow" aria-labelledby="dropdownUser1">
                        <li><a class="dropdown-item" href="#">New project...</a></li>
                        <li><a class="dropdown-item" href="#">Settings</a></li>
                        <li><a class="dropdown-item" href="#">Profile</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="#">Sign out</a></li>
                    </ul>
                </div>
            </div>
            @yield('content')
        </div>
    </main>

    @include('partials.footer')
</body>

</html>
