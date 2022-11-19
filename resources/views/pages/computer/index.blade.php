@extends('layouts.base')
@section('content')

<section class="hero-small">
    <div class="wrapper">
        <div class="hero-small-content">
            <div class="hero-small-text">
                <h2>Gaming PC's</h2>
                <p>Find your <span>Gaming PC</span>!</p>
            </div>
        </div>
    </div>
</section>

<section class="card-section">
    <div class="card-section-header">
        <h2>Gaming PCs</h2>
        <a href="/">Home</a> <i class="fa-solid fa-arrow-right-long"></i> <a href="/computer">Gaming PCs</a>
    </div>
    <div class="wrapper">
        <div class="card-section-flex">
            @foreach ($computers as $computer)
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