<?php

$neutralImage = 'https://www.dccomics.com/sites/default/files/styles/current_series_grid_item192x192/public/default_images/DC_placeholder_series_573b3c5dac0485.40480935.jpg?itok=oRZ6eTCO';

?>

@extends('layouts.app')


@section('content')
    <div class="hero_img"></div>

    <div id="site_main">
        <section class="content_section container">
            <div class="section_title">
                <h3>CURRENT SERIES</h3>
            </div>
            <div class="row comic space_evenly">
                @foreach ($comics as $index => $comic)
                    <a href="{{ route('comics.show', $comic->id) }}" class="col-2">
                        <div class="comic">
                            <div class="comic_image">
                                <img src="{{ $comic['thumb'] == null ? $neutralImage : $comic['thumb'] }}" alt="">
                            </div>
                            <h3 class="title">
                                {{ $comic['series'] == null ? 'DC Comics' : $comic['series'] }}
                            </h3>
                        </div>
                    </a>
                @endforeach
            </div>
            <div class="load">
                <h4>LOAD MORE</h4>
            </div>
        </section>
    </div>

@endsection
