@extends('layouts.app')

@section('page-css')

    <link rel="stylesheet" href="/css/homepage.css">

@section('content')
    <div class="hero_img"></div>

    <div id="site_main">
        <section class="content_section container">
            <div class="section_title">
                <h3>
                    MY COMICS
                </h3>
            </div>

            <table class="table table-dark">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">TITLE</th>
                        <th scope="col">PRICE</th>
                        <th scope="col">SALE DATE</th>
                        <th scope="col"></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($comics as $comic)
                        <tr>
                            <th scope="row">{{ $comic->id }}</th>
                            <td>{{ $comic->title }}</td>
                            <td>${{ $comic->price }}</td>
                            <td>{{ $comic->sale_date }}</td>
                            <td>
                                <a href="{{ route('comics.show', ['comic' => $comic->id]) }}">view</a> |
                                <a href="#">delete</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <div class="load">
                <h4>ADD COMIC</h4>
            </div>
        </section>
    </div>

@endsection
