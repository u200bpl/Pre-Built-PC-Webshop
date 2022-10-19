@extends('layouts.base')

@section('content')

<div class="wrapper">
    <div class="create-form">
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
        <form action="{{route('computer.update', $computer->id)}}" method="POST">
            @method("PUT")
            @csrf
            <div class="form-group">
                <label for="name">Name</label>
                <hr>
                <input value="{{$computer->name}}" type="text" name="name" id="name" class="form-control">
            </div>

            <div class="form-group">
                <label for="description">Description</label>
                <hr>
                <textarea name="description" id="description" rows="1" cols="50">{{$computer->description}}</textarea>
            </div>

            <div class="form-group">
                <label for="img">Image</label>
                <hr>
                <input type="text" name="img" id="img" value="{{$computer->img}}">
            </div>
                
            <div class="form-group">
                <label for="pccase_id">PC Case</label>
                <hr>
                <select name="pccase_id" id="pccase_id" class="form-control">
                    @foreach ($pccases as $pccase)
                        <option value="{{$pccase->id}}">{{$pccase->name}}</option>
                    @endforeach
                </select>
            </div>
            
            <div class="form-group">
                <label for="processor_id">Processor</label>
                <hr>
                <select name="processor_id" id="processor_id" class="form-control">
                    @foreach ($processors as $processor)
                        <option value="{{$processor->id}}">{{$processor->name}}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label for="graphicscard_id">Graphics Card</label>
                <hr>
                <select name="graphicscard_id" id="graphicscard_id" class="form-control">
                    @foreach ($graphicscards as $graphicscard)
                        <option value="{{$graphicscard->id}}">{{$graphicscard->name}}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label for="motherboard_id">Motherboard</label>
                <hr>
                <select name="motherboard_id" id="motherboard_id" class="form-control">
                    @foreach ($motherboards as $motherboard)
                        <option value="{{$motherboard->id}}">{{$motherboard->name}}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label for="cpucooler_id">Processor Cooling</label>
                <hr>
                <select name="cpucooler_id" id="cpucooler_id" class="form-control">
                    @foreach ($cpucoolers as $cpucooler)
                        <option value="{{$cpucooler->id}}">{{$cpucooler->name}}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label for="ram_id">Ram</label>
                <hr>
                <select name="ram_id" id="ram_id" class="form-control">
                    @foreach ($rams as $ram)
                        <option value="{{$ram->id}}">{{$ram->name}}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label for="storage_id">Storage</label>
                <hr>
                <select name="storage_id" id="storage_id" class="form-control">
                    @foreach ($storages as $storage)
                        <option value="{{$storage->id}}">{{$storage->name}}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label for="psu_id">Power Supply Unit</label>
                <hr>
                <select name="psu_id" id="psu_id" class="form-control">
                    @foreach ($psus as $psu)
                        <option value="{{$psu->id}}">{{$psu->name}}</option>
                    @endforeach
                </select>
            </div>

            
            <div class="form-group">
                <label for="os">Operating System</label>
                <hr>
                <input value="{{$computer->os}}" type="text" name="os" id="os" class="form-control">
            </div>
            
            <div class="form-group">
                <label for="warranty">Warranty</label>
                <hr>
                <input value="{{$computer->warranty}}" type="text" name="warranty" id="warranty" class="form-control">
            </div>

            <div class="form-group">
                <label for="price">Price</label>
                <hr>
                <input type="number" name="price" id="price" class="form-control" value="{{$computer->price}}">
            </div>

            @if($computer->is_active)
                <div class="form-group">
                    <p>Visibility</p>
                    <hr>
                    <div class="check">
                        <p>Private</p>
                        <label class="switch">
                            <input type='hidden' value='0' name='is_active'>
                            <input type="checkbox" value="1" name="is_active" id="is_active" checked>
                            <span class="slider round"></span>
                        </label>
                        <p>Public</p>
                    </div>
                </div>
            @else
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
            @endif

            <div class="form-group">
                <label for="stock">Stock</label>
                <hr>
                <input type="number" name="stock" id="stock" class="form-control" value="{{$computer->stock}}">
            </div>
            
            <div class="form-group">
                <button type="submit">Save Changes</button>
            </div>
        </form>

        <form action="{{route('computer.destroy', $computer->id)}}" method="post">
            @csrf
            @method('DELETE')
            <div class="form-group delete">
                <input type="submit" value="Delete">
            </div>
        </form>
    </div>
</div>

@endsection