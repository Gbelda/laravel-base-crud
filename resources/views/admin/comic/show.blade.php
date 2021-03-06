<?php

$neutralImage = 'https://www.dccomics.com/sites/default/files/styles/current_series_grid_item192x192/public/default_images/DC_placeholder_series_573b3c5dac0485.40480935.jpg?itok=oRZ6eTCO';

?>

@extends('layouts.adminApp')

@section('content')



    <div class="content_container content_header">

        <div class="poster">
            <img src="{{ $comic['thumb'] == null ? $neutralImage : $comic['thumb'] }}" alt="">
            <h6 class="sticker">COMIC BOOK</h6>
            <h6 class="gallery">VIEW GALLERY</h6>
        </div>

        <div class="main_content d-flex justify-content-between ">
            <div class="poster col-3">
                <img src="{{ $comic['thumb'] == null ? $neutralImage : $comic['thumb'] }}" alt="">
                <h6 class="sticker">COMIC BOOK</h6>
                <h6 class="gallery">VIEW GALLERY</h6>
            </div>

            <div class="comic_description col-9">
                <h1 class="comic_title">
                    {{ $comic['title'] }}
                </h1>

                <div class="info">
                    <div class="price_info  d-flex">

                        <div class="status d-flex col-8 justify-content-between align-items-center px-3">
                            <h6>U.S. Price: <span class="price">{{ $comic['price'] }}</span></h6>
                            <h6>AVAILABLE</h6>
                        </div>

                        <div class="availability col-4 d-flex justify-content-center align-items-center">
                            <h6>Check Availability&blacktriangledown;</h6>
                        </div>

                    </div>

                    <p class="comic_text">
                        {{ $comic['description'] }}
                    </p>
                </div>
            </div>

        </div>

    </div>
@endsection
