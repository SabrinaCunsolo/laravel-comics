@extends('layouts.app')

@section('page-title', 'Homepage - Laravel Comics')

@section('content')
    @include('partials.jumbo')
    <section id="series">
        <div class="container">
            @foreach ($series as $item)
                <div class="comic">
                    <div class="comic-image">
                        <img src=" {{ $item['thumb'] }} " alt=" {{ $item['series'] }} ">
                    </div>
                    <div class="comic-name">
                        {{ $item['series'] }}
                    </div>
                </div>
            @endforeach
        </div>
    </section>
@endsection
