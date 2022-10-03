    @extends('layouts.base')

    @section('content')

    @foreach ($products as $product)
        <div class="container">
            <h1>Products:</h1>
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">{{$product->name}}</h5>
                    <p class="card-text">{{$product->description}}</p>
                    <a href="#" class="btn btn-primary">Order now</a>
                </div>
            </div>
        </div>
    @endforeach

    @endsection