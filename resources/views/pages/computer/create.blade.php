@extends('layouts.base')

@section('content')

<div class="wrapper">
    <div class="create-form">
        <h1>Create new PC</h1>
        @if($errors->any())
            <div class="alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{$error}}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action="{{route('computer.store')}}" method="POST">
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
                <input type="text" name="img" id="img" placeholder="2003867378">
            </div>
                
            <div class="form-group">
                <label for="pccase_id">PC Case</label>
                <hr>
                <select name="pccase_id" id="pccase_id">
                    @foreach ($pccases as $pccase)
                        <option value="{{$pccase->id}}">{{$pccase->name}}</option>
                    @endforeach
                </select>
            </div>
            
            <div class="form-group">
                <label for="processor_id">Processor</label>
                <hr>
                <select name="processor_id" id="processor_id">
                    @foreach ($processors as $processor)
                        <option value="{{$processor->id}}">{{$processor->name}}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label for="graphicscard_id">Graphics Card</label>
                <hr>
                <select name="graphicscard_id" id="graphicscard_id">
                    @foreach ($graphicscards as $graphicscard)
                        <option value="{{$graphicscard->id}}">{{$graphicscard->name}}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label for="motherboard_id">Motherboard</label>
                <hr>
                <select name="motherboard_id" id="motherboard_id">
                    @foreach ($motherboards as $motherboard)
                        <option value="{{$motherboard->id}}">{{$motherboard->name}}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label for="cpucooler_id">Processor Cooling</label>
                <hr>
                <select name="cpucooler_id" id="cpucooler_id">
                    @foreach ($cpucoolers as $cpucooler)
                        <option value="{{$cpucooler->id}}">{{$cpucooler->name}}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label for="ram_id">Ram</label>
                <hr>
                <select name="ram_id" id="ram_id">
                    @foreach ($rams as $ram)
                        <option value="{{$ram->id}}">{{$ram->name}}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label for="storage_id">Storage</label>
                <hr>
                <select name="storage_id" id="storage_id">
                    @foreach ($storages as $storage)
                        <option value="{{$storage->id}}">{{$storage->name}}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label for="psu_id">Power Supply Unit</label>
                <hr>
                <select name="psu_id" id="psu_id">
                    @foreach ($psus as $psu)
                        <option value="{{$psu->id}}">{{$psu->name}}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label for="os">Operating System</label>
                <hr>
                <input placeholder="Windows 11 Pro" type="text" name="os" id="os" class="form-control">
            </div>

            <div class="form-group">
                <label for="warranty">Warranty</label>
                <hr>
                <input placeholder="2 Years" type="text" name="warranty" id="warranty" class="form-control">
            </div>

            <div class="form-group">
                <label for="price">Price</label>
                <hr>
                <input type="number" name="price" id="price" placeholder="1500">
            </div>

            <div class="form-group">
                <p>Visibility</p>
                <hr>
                <div class="check">
                    <p>Private</p>
                    <label class="switch">
                        <input type='hidden' value='0' name='is_active'>
                        <input type="checkbox" value="1" name="is_active" id="is_active">
                        <span class="slider round"></span>
                    </label>
                    <p>Public</p>
                </div>
            </div>

            <div class="form-group">
                <label for="stock">Stock</label>
                <hr>
                <input type="number" name="stock" id="stock" class="form-control" placeholder="69">
            </div>

            <div class="form-group">
                <button type="submit">Create Computer</button>
            </div>
        </form>
    </div>
</div>

@endsection