@extends('layouts.base')
@section('content')

<section class="hero">
    <div class="wrapper">
        <div class="here-content">
            <div class="hero-text">
                <h2>Computers</h2>
                <p>Find your <span>Gaming PC</span>!</p>
            </div>
        </div>
    </div>
</section>

<section class="card-section">
    <div class="card-section-header">
        <h2>Gaming PCs</h2>
        <a href="/">Home</a> <i class="fa-solid fa-arrow-right-long"></i> <a href="/computers">Computers</a>
    </div>
    <div class="wrapper">
        <div class="card-section-flex">
            @foreach ($computers as $computer)
            <a href="/{{$computer->name}}">
                <div class="card">
                    <div class="card-image">
                        <img src="{{$computer->img}}" alt="Computer img">
                    </div>
                    <div class="card-text">
                        <h3>{{$computer->name}}</h3>
                        <p>{{$computer->description}}</p>
                        <p class="card-section-price">€{{$computer->price}}</p>
                    </div>

                    <div class="cards-components">
                        <p><i class='bi bi-cpu'></i> <b>CPU:</b> {{ $computer->processor->name }}</p>
                        <p><i class='bi bi-gpu-card'></i> <b>GPU:</b> {{$computer->video_card_id}}</p>
                        <p><i class="bi bi-memory"></i> <b>RAM:</b> {{$computer->memory_id}}</p>
                        <p><i class="bi bi-hdd"></i> <b>Storage:</b> {{$computer->storage_id}}</p>

                        <button>See Full Pc Information</button>
                    </div>
                </div>
            </a>
            @endforeach
        </div>
    </div>
</section>

@endsection