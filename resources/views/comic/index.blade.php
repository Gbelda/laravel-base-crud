@extends('layouts.app')


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
                                <a name="view" id="view" class="btn btn-primary"
                                    href="{{ route('comics.show', $comic->id) }}" role="button">
                                    <i class="far fa-eye"></i>
                                </a>
                                <a name="" id="" class="btn btn-info" href="#" role="button">
                                    <i class="far fa-edit"></i>
                                </a>
                                <a name="" id="" class="btn btn-danger" href="#" role="button">
                                    <i class="far fa-trash-alt"></i>
                                </a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            {{ $comics->links() }}
            <div class="create">
                <h4>
                    <a href="{{ route('comics.create') }}">
                        ADD COMIC
                    </a>
                </h4>
            </div>
        </section>
    </div>

@endsection
