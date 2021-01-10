@extends('layouts.app')

@section('page-title', 'Homepage - Laravel Comics')

@section('content')
    @include('partials.jumbo')
    <section id="series">
        <div class="container">
            <div class="current-series">
                <h2 class="uppercase">Current Series</h2>
            </div>
            <div class="comic-container">
                @foreach ($series as $index =>$item)
                    <a href="{{ route('dettagli-fumetto', ['id' => $index]) }}">
                        <div class="comic">
                            <div class="comic-image">
                                <img src=" {{ $item['thumb'] }} " alt=" {{ $item['series'] }} ">
                            </div>
                            <div class="comic-name">
                                <span class="uppercase"> {{ $item['series'] }} </span>
                            </div>
                        </div>
                    </a>
                @endforeach
            </div>
            <div class="load-button">
                <h3 class="uppercase">
                    <a href="#">Load More</a>
                </h3>
            </div>
        </div>
    </section>
@endsection
