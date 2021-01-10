@extends('layouts.app')

@section('page-title', 'Card Comic - Laravel Comics')

@section('content')
    @include('partials.jumbo')
    <section id="series">
        <div class="container">
            <h1>Nessun contenuto disponibile per questa ricerca</h1>
            <a href="{{ route('homepage') }}">
                Vai alla homepage
            </a>
        </div>
    </section>
@endsection
