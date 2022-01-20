@extends('layouts.app')
@section('content')
    <div class="hero_img"></div>
    <div id="site_main">
        <div class="container content_section">
            <div class="section_title">
                <h3>
                    EDIT COMIC
                </h3>
            </div>
            <form method="POST" action="#">
                @csrf
                <div class="form-group">
                    <label for="title">TITLE</label>
                    <input type="text" class="form-control" id="title" value="{{ $comic->title }}" name="title">
                </div>
                <div class="form-group">
                    <label for="price">PRICE</label>
                    <input type="text" class="form-control" id="price" value="{{ $comic->price }}" name="price">
                </div>
                <div class="form-group">
                    <label for="sale_date">SALE DATE</label>
                    <input type="date" class="form-control" id="sale_date"
                        value="{{ date('Y-m-d', strtotime($comic->sale_date)) }}" name="sale_date">
                </div>
                <div class="form-group">
                    <label for="description">DESCRIPTON</label>
                    <textarea name="description" id="description" cols="163" rows="10"
                        class="form-control">{{ $comic->description }}</textarea>
                </div>


                <button type="submit" class="btn btn-primary">Save</button>
            </form>
        </div>
    </div>
@endsection