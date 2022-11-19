@extends('layouts.base')

@section('content')

<div class="wrapper">
    <div class="create-form">
        <h1>Add new Power Supply Unit</h1>
        @if($errors->any())
            <div class="alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{$error}}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action="{{route('psu.store')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="name">Name</label>
                <hr>
                <input type="text" name="name" id="name" placeholder="HYDRA">
            </div>

            <div class="form-group">
                <label for="description">Description</label>
                <hr>
                <textarea name="description" id="description" rows="1" cols="50" placeholder="Lorem ipsum dolor, sit amet consectetur adipisicing elit. Fugiat ducimus odio nulla voluptas, quidem, rerum illum nisi error minus blanditiis laudantium. Nostrum amet ex quasi?"></textarea>
            </div>

            <div class="form-group">
                <label for="img">Image</label>
                <hr>
                <input type="file" accept=".png" name="img" id="img">
            </div>

            <div class="form-group">
                <label for="price">Price</label>
                <hr>
                <input type="number" name="price" id="price" placeholder="1500">
            </div>

            <div class="form-group">
                <button type="submit">Add Power Supply Unit</button>
            </div>
        </form>
    </div>
</div>

@endsection