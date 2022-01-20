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
            {{-- ./SECTION TITLE --}}


            <form method="POST" action="{{ route('comics.store') }}">
                @csrf
                <div class="form-group">
                    <label for="title">TITLE</label>
                    <input type="text" class="form-control @error('title') is-invalid @enderror" id="title"
                        placeholder="Comic Title" name="title">
                    @error('title')
                        <small>
                            <div class="alert alert-danger">{{ $message }}</div>
                        </small>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="price">PRICE</label>
                    <input type="text" class="form-control @error('price') is-invalid @enderror" id="price"
                        placeholder="Price | numbers only" name="price">
                    @error('price')
                        <small>
                            <div class="alert alert-danger">{{ $message }}</div>
                        </small>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="sale_date">SALE DATE</label>
                    <input type="date" class="form-control @error('sale_date') is-invalid @enderror" id="sale_date"
                        placeholder="Price | numbers only" name="sale_date">
                    @error('sale_date')
                        <small>
                            <div class="alert alert-danger">{{ $message }}</div>
                        </small>
                    @enderror
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
