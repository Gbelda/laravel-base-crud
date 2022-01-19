<?php

$indexes = ['characters', 'comics', 'movies', 'tv', 'games', 'collectibles', 'videos', 'fans', 'news', 'shop'];

?>

<header>

    <div class="additional">
        <div class="container_main d-flex justify-content-end">
            <h6>
                DC POWER&#8480; VISA&reg;
            </h6>
            <h6>
                ADDITIONAL DC SITES
            </h6>
        </div>
    </div>

    <div class="nav">
        <div class="container_main d-flex justify-content-between align-items-center">
            <div class="logo">
                {{-- <img src="{{ asset('img/dc-logo.png') }}" alt=""> --}}
            </div>

            <ul class="index d-flex list-unstyled align-items-center justify-content-evenly">
                @foreach ($indexes as $index)
                    <li class="">
                        {{-- <a href="{{ route("$index") }}"
                            id="{{ str_contains(Route::currentRouteName(), $index) ? 'active' : '' }}"> --}}
                        {{ strtoupper($index) }}
                        {{-- </a> --}}
                    </li>
                @endforeach
            </ul>

            <div class="search d-flex">
                <input type="text" placeholder="Search">
                <img src="{{ asset('img/search.svg') }}" alt="" class="">
            </div>
        </div>

    </div>

</header>
