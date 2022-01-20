@extends('layouts.app')

@section('content')
    <div class="main d-flex justify-content-center align-items-center">
        <div class="content d-flex flex-column align-items-center">
            <h1>
                Welcome to DC Comics
            </h1>
            <a name="" id="" class="btn btn-primary" href="{{ route('comics.index') }}" role="button">Click for Comic
                list</a>
        </div>
    </div>
@endsection
