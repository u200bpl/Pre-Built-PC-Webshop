@extends('layouts.base')
@section('content')

<section class="hero">
    <div class="wrapper">
        <div class="here-content">
            <div class="hero-text">
                <div class="sub-slogan">
                    <p>Welcom to Hydra PCs</p>
                </div>
                <h2>The <span>Best PCs</span> in the Universe</h2>
                <p>Because the games are worth it!</p>
                <a href="">Find your system</a>
            </div>
        </div>
    </div>
</section>

<section class="card-section">
    <div class="card-section-header">
        <h2>Featured Gaming PCs</h2>
        <a href="/computers">Store <i class="fa-solid fa-arrow-right-long"></i></a>
    </div>
    <div class="wrapper">
        <div class="card-section-flex">
            @foreach ($computers->take(4) as $computer)
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