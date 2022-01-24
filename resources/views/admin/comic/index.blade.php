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

            @if (session('message'))
                <div class="alert alert-success">
                    {{ session('message') }}
                </div>
            @endif

            @if (session('alert'))
                <div class="alert alert-danger">
                    {{ session('alert') }}
                </div>
            @endif


            {{-- COMIC LIST TABLE --}}
            <table class="table table-dark">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">TITLE</th>
                        <th scope="col">PRICE</th>
                        <th scope="col">SALE DATE</th>
                        <th scope="col">ACTIONS</th>
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
                                <a name="" id="" class="btn btn-info" href="{{ route('comics.edit', $comic->id) }}"
                                    role="button">
                                    <i class="far fa-edit"></i>
                                </a>
                                <!-- Button trigger modal -->
                                <button type="button" class="btn btn-danger" data-bs-toggle="modal"
                                    data-bs-target="#delete{{ $comic->id }}">
                                    <i class="far fa-trash-alt"></i>
                                </button>

                                <!-- Modal -->
                                <div class="modal fade" id="delete{{ $comic->id }}" tabindex="-1" role="dialog"
                                    aria-labelledby="delete{{ $comic->id }}" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title">Delete - {{ $comic->title }}</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <h6>
                                                    WARNING!!: You are permanently deleting this Comic,
                                                    <br> Are you sure?
                                                </h6>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary"
                                                    data-bs-dismiss="modal">Close</button>

                                                <form method="post" action="{{ route('comics.destroy', $comic->id) }}">
                                                    @csrf
                                                    @method('DELETE')

                                                    <button type="submit" class="btn btn-danger">Delete</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>

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
