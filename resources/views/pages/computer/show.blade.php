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
                    <div class="detail-header-price">
                        <p>€{{$computer->price}} Euro</p>
                    </div>
                    @if($computer->stock == 0)
                        <p>Out of Stock</p>
                    @else
                        <p>Stock: <span>{{$computer->stock}}</span></p>
                    @endif
                </div>

                <button class="accordion active"><b>Information</b></button>
                <div class="panel" style="display: block;">
                    <p>{{$computer->description}}</p>
                </div>

                <button class="accordion"><b>Computer Specifactions</b></button>
                <div class="panel">
                    <div class="pc-info">
                        <div class="pc-spec">
                            <img src="{{asset('storage/img/pccase/' . $computer->pccase->img)}}" alt="{{$computer->pccase->name}} Computer img">
                            <div class="pc-spec-info">
                                <p><b>Case:</b> {{$computer->pccase->name}}</p>
                            </div>
                        </div>
                        <div class="pc-spec">
                            <img src="{{asset('storage/img/processor/' . $computer->processor->img)}}" alt="{{$computer->processor->name}} Computer img">
                            <div class="pc-spec-info">
                                <p><b>CPU:</b> {{$computer->processor->name}}</p>
                            </div>
                        </div>
                        <div class="pc-spec">
                            <img src="{{asset('storage/img/graphicscard/' . $computer->graphicscard->img)}}" alt="{{$computer->graphicscard->name}} Computer img">
                            <div class="pc-spec-info">
                                <p><b>GPU:</b> {{$computer->graphicscard->name}}</p>
                            </div>
                        </div>
                        <div class="pc-spec">
                            <img src="{{asset('storage/img/motherboard/' . $computer->motherboard->img)}}" alt="{{$computer->motherboard->name}} Computer img">
                            <div class="pc-spec-info">
                                <p><b>Motherboard:</b> {{$computer->motherboard->name}}</p>
                            </div>
                        </div>
                        <div class="pc-spec">
                            <img src="{{asset('storage/img/cpucooler/' . $computer->cpucooler->img)}}" alt="{{$computer->cpucooler->name}} Computer img">
                            <div class="pc-spec-info">
                                <p><b>CPU Cooler:</b> {{$computer->cpucooler->name}}</p>
                            </div>
                        </div>
                        <div class="pc-spec">
                            <img src="{{asset('storage/img/ram/' . $computer->ram->img)}}" alt="{{$computer->ram->name}} Computer img">
                            <div class="pc-spec-info">
                                <p><b>RAM:</b> {{$computer->ram->name}}</p>
                            </div>
                        </div>
                        <div class="pc-spec">
                            <img src="{{asset('storage/img/storage/' . $computer->storage->img)}}" alt="{{$computer->storage->name}} Computer img">
                            <div class="pc-spec-info">
                                <p><b>Storage:</b> {{$computer->storage->name}}</p>
                            </div>
                        </div>
                        <div class="pc-spec">
                            <img src="{{asset('storage/img/psu/' . $computer->psu->img)}}" alt="{{$computer->psu->name}} Computer img">
                            <div class="pc-spec-info">
                                <p><b>PSU:</b> {{$computer->psu->name}}</p>
                            </div>
                        </div>
                        <div class="pc-spec">
                            <img src="{{asset('storage/img/os/windows-11-pro.png')}}">
                            <div class="pc-spec-info">
                                <p><b>OS:</b> {{$computer->os}}</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="detail-components">
                    <a href=""><b>Add to card</b> - €{{$computer->price}}</a>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection