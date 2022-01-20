@extends('layouts.app')
@section('content')
    <div class="hero_img"></div>
    <div id="site_main">
        <div class="container content_section">
            <div class="section_title">
                <h3>
                    Add Comic
                </h3>
            </div>
            <form method="POST" action="{{ route('comics.store') }}">
                @csrf
                <div class="form-group">
                    <label for="title">TITLE</label>
                    <input type="text" class="form-control" id="title" placeholder="Comic Title" name="title">
                </div>
                <div class="form-group">
                    <label for="price">PRICE</label>
                    <input type="text" class="form-control" id="price" placeholder="Price | numbers only" name="price">
                </div>
                <div class="form-group">
                    <label for="sale_date">SALE DATE</label>
                    <input type="date" class="form-control" id="sale_date" placeholder="Price | numbers only"
                        name="sale_date">
                </div>
                <div class="form-group">
                    <label for="description">DESCRIPTON</label>
                    <textarea name="description" id="description" cols="163" rows="10" class="form-control"></textarea>
                </div>


                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
@endsection
