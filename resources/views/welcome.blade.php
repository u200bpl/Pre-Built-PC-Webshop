@extends('layouts.base')
@section('content')

<section class="hero">
    <div class="wrapper">
        <div class="here-content">
            <div class="hero-text">
                <div class="sub-slogan">
                    <p>Welcome to Hydra PCs</p>
                </div>
                <h2>The <span>Best PCs</span> in the Universe</h2>
                <p>Because the games are worth it!</p>
                <a href="/computer">Find your system</a>
            </div>
        </div>
    </div>
</section>

<section class="card-section">
    <div class="card-section-header">
        <h2>Featured Gaming PCs</h2>
        <a href="/computer">Store <i class="fa-solid fa-arrow-right-long"></i></a>
    </div>
    <div class="wrapper">
        <div class="card-section-flex">
            @foreach ($computers->take(4) as $computer)
                @if($computer->is_active)
                <a href="/computer/{{$computer->id}}">
                    <div class="card">
                        <div class="card-image">
                            @if($computer->img)
                                <img src="{{asset('img/' . $computer->img . '.png')}}" alt="Computer img">
                            @else
                                <img src="{{asset('img/no-img-found.png')}}" alt="">
                            @endif
                        </div>
                        <hr>
                        <div class="card-text">
                            <h3>{{$computer->name}}</h3>
                            <p class="card-section-price">€{{$computer->price}}</p>
                        </div>
                    </div>
                </a>
                @endif
            @endforeach
        </div>
    </div>
</section>

@endsection