@extends('layouts.app')

@section('page-css')

    <link rel="stylesheet" href="/css/homepage.css">

@section('content')
    <div class="hero_img"></div>

    <div id="site_main">
        <section class="content_section container">
            <div class="section_title">
                <h3>CURRENT SERIES</h3>
            </div>
            <div class="row comic space_evenly">
                @foreach ($comics as $comic)
                    <a href="{{ route('comics.show', ['comic' => $comic->id]) }}" class="col-2">
                        <div class="comic">
                            <div class="comic_image">
                                <img src="{{ $comic['thumb'] }}" alt="">
                            </div>
                            <h3 class="title">
                                {{ $comic['series'] }}
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
