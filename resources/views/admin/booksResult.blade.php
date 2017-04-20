@extends('layouts.master')

@section('title')
    Books search
@endsection

@section('content')
    <div class="row">
        <div class="col-lg-8 col-lg-offset-2">
            <p>Search results for: <i class="search-count">{{$bookName}}</i></p>
            <hr>
            @include('partials.searchBooksForm')
        </div>
        @include('partials.booksList')
    </div>
@endsection