@extends('layouts.base')
@section('content')

<section>
    <div class="wrapper">
        <div class="detail-flex">
            <div class="detail-img">
                @if($computer->img)
                    <img src="{{asset('img/' . $computer->img . '.png')}}" alt="{{$computer->name}} Computer img">
                @else
                    <img src="{{asset('img/no-img-found.png')}}" alt="">
                @endif
            </div>
            
            
            <div class="detail">
                <div class="detail-header">
                    <h1>{{$computer->name}}</h1>
                    <p>€{{$computer->price}}</p>
                </div>

                <button class="accordion"><b>Information</b></button>
                <div class="panel">
                    <p>{{$computer->description}}</p>
                </div>

                <button class="accordion"><b>Computer Specifactions</b></button>
                <div class="panel">
                    <p><b>Case:</b> {{$computer->pccase->name}}</p>
                    <p><b>CPU:</b> {{$computer->processor->name}}</p>
                    <p><b>GPU:</b> {{$computer->graphicscard->name}}</p>
                    <p><b>Motherboard:</b> {{$computer->motherboard->name}}</p>
                    <p><b>CPU Cooler:</b> {{$computer->cpucooler->name}}</p>
                    <p><b>RAM:</b> {{$computer->ram->name}}</p>
                    <p><b>Storage:</b> {{$computer->storage->name}}</p>
                    <p><b>PSU:</b> {{$computer->psu->name}}</p>
                    <p><b>OS:</b> {{$computer->os}}</p>
                    <p><b>Warranty:</b> {{$computer->warranty}}</p>
                </div>

                <button class="accordion"><b>Warranty Information</b></button>
                <div class="panel">
                    <p>{{$computer->description}}</p>
                </div>

                <div class="detail-components">
                    <button><b>Add to card</b> - €{{$computer->price}}</button>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection