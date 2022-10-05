@extends('layouts.base')
@section('content')

<section class="hero">
    <div class="wrapper">
        <div class="here-content">
            <div class="hero-text">
                <h2>Gaming PC's</h2>
                <p>Find your <span>Gaming PC</span>!</p>
            </div>
        </div>
    </div>
</section>

<section class="card-section">
    <div class="card-section-header">
        <h2>Gaming PCs</h2>
        <a href="/">Home</a> <i class="fa-solid fa-arrow-right-long"></i> <a href="/computers">Gaming PCs</a>
    </div>
    <div class="wrapper">
        <div class="card-section-flex">
        @foreach ($computers as $computer)
            <a href="/computers/{{$computer->id}}">
                <div class="card">
                    <div class="card-image">
                        <img src="{{asset('img/' . $computer->img . '.png')}}" alt="Computer img">
                    </div>
                    <hr>
                    <div class="card-text">
                        <h3>{{$computer->name}}</h3>
                        <p class="card-section-price">€{{$computer->price}}</p>
                    </div>
                </div>
            </a>
            @endforeach
        </div>
    </div>
</section>

@endsection