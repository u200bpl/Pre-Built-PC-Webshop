@extends('layouts.base')
@section('content')

<section>
    <div class="wrapper">
        <div class="detail-flex">
            <div class="detail-img">
                <img src="../img/{{$computer->img}}" alt="{{$computer->name}} Computer img">
            </div>

            
            <div class="detail">
                <h1>{{$computer->name}}</h1>

                <button class="accordion">Information</button>
                <div class="panel">
                    <p>{{$computer->description}}</p>
                </div>

                <button class="accordion">Computer Specifactions</button>
                <div class="panel">
                    <p><i class="bi bi-pc"></i> <b>Case:</b> {{$computer->pccase->name}}</p>
                    <p><i class="bi bi-motherboard"></i> <b>Motherboard:</b> {{$computer->motherboard->name}}</p>
                    <p><i class='bi bi-cpu'></i> <b>CPU:</b> {{$computer->processor->name}}</p>
                    <p><i class="bi bi-fan"></i> <b>CPU Cooler:</b> {{$computer->cpucooler->name}}</p>
                    <p><i class="bi bi-memory"></i> <b>RAM:</b> {{$computer->ram->name}}</p>
                    <p><i class='bi bi-gpu-card'></i> <b>GPU:</b> {{$computer->graphicscard->name}}</p>
                    <p><i class="bi bi-hdd"></i> <b>Storage:</b> </p>
                    <p><i class="bi bi-plug"></i> <b>PSU:</b> </p>
                    <p><i class="bi bi-windows"></i> <b>OS:</b> </p>
                    <p><i class="bi bi-exclamation-triangle"></i> <b>Warranty:</b> </p>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection