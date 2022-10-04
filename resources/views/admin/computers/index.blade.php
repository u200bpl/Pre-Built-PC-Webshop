    @extends('layouts.base')

    @section('content')

    <section class="card-section">
    <div class="card-section-header">
        <h2>Gaming PCs</h2>
    </div>
    <div class="wrapper">
        <div class="card-section-flex">
            @foreach ($computers as $computer)
            <a href="/{{$computer->id}}">
                <div class="card">
                    <div class="card-image">
                        <img src="../img/{{$computer->img}}" alt="Computer img">
                    </div>
                    <div class="card-text">
                        <h3>{{$computer->name}}</h3>
                        <p>{{$computer->description}}</p>
                        <p class="card-section-price">€{{$computer->price}}</p>
                    </div>
                    
                    <div class="cards-components">
                        <button>See Full Pc Information</button>
                    </div>
                </div>
            </a>
            @endforeach
        </div>
    </div>
</section>

    @endsection