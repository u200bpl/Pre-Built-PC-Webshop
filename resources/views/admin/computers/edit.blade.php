@extends('layouts.base')

@section('content')

<div class="wrapper">
    <h1>Change {{$computer->name}} Configuration</h1>
    @if($errors->any())
        <div class="alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="{{route('admin.computers.update', $computer->id)}}" method="POST">
        @csrf
        @method("PUT")
        <div class="form-group">
            <label for="name">Name</label>
            <input value="{{$computer->name}}" type="text" name="name" id="name" class="form-control">
        </div>
            
        <div class="form-group">
            <label for="pccase_id">PC Case</label>
            <select name="pccase_id" id="pccase_id" class="form-control">
                @foreach ($pccases as $pccase)
                    <option value="{{$pccase->id}}">{{$pccase->name}}</option>
                @endforeach
            </select>
        </div>
        
        <div class="form-group">
            <label for="processor_id">Processor</label>
            <select name="processor_id" id="processor_id" class="form-control">
                @foreach ($processors as $processor)
                    <option value="{{$processor->id}}">{{$processor->name}}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="graphicscard_id">Graphics Card</label>
            <select name="graphicscard_id" id="graphicscard_id" class="form-control">
                @foreach ($graphicscards as $graphicscard)
                    <option value="{{$graphicscard->id}}">{{$graphicscard->name}}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="motherboard_id">Motherboard</label>
            <select name="motherboard_id" id="motherboard_id" class="form-control">
                @foreach ($motherboards as $motherboard)
                    <option value="{{$motherboard->id}}">{{$motherboard->name}}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="cpucooler_id">Processor Cooling</label>
            <select name="cpucooler_id" id="cpucooler_id" class="form-control">
                @foreach ($cpucoolers as $cpucooler)
                    <option value="{{$cpucooler->id}}">{{$cpucooler->name}}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="ram_id">Ram</label>
            <select name="ram_id" id="ram_id" class="form-control">
                @foreach ($rams as $ram)
                    <option value="{{$ram->id}}">{{$ram->name}}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="storage_id">Storage</label>
            <select name="storage_id" id="storage_id" class="form-control">
                @foreach ($storages as $storage)
                    <option value="{{$storage->id}}">{{$storage->name}}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="psu_id">Power Supply Unit</label>
            <select name="psu_id" id="psu_id" class="form-control">
                @foreach ($psus as $psu)
                    <option value="{{$psu->id}}">{{$psu->name}}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="price">Price</label>
            <input type="number" name="price" id="price" class="form-control">
        </div>

        <button type="submit" class="btn btn-primary mt-2">Save Changes</button>
    </form>

    <form action="{{route('admin.computers.destroy', $computer->id)}}" method="post">
        @csrf
        @method('DELETE')
        <input type="submit" value="Delete" class="btn btn-danger">
    </form>
</div>

@endsection