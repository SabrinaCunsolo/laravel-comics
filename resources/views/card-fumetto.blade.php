@extends('layouts.app')

@section('page-title', 'Card Comic - Laravel Comics')

@section('content')
    @include('partials.jumbo')
    <section>
        <img src="{{ $comic['thumb'] }}" alt="{{ $comic['title'] }}">
    </section>
    <section id="series">
        <div class="container">
            <h1>{{ $comic['title'] }}</h1>
        </div>
    </section>
@endsection
