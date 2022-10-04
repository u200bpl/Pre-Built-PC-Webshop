@extends('layouts.base')

@section('content')

<div class="container">
    <h1>Create new product</h1>
    <form action="{{route('admin.computers.store')}}" method="POST">
        @csrf
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="name" id="name" class="form-control">
        </div>
            
        <div class="form-group">
            <label for="categories_id">Category</label>
            <select name="categories_id" id="categories_id" class="form-control">
                @foreach ($cat as $c)
                    <option value="{{$c->id}}">{{$c->name}}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="sub_categories_id">Subcategory</label>
            <select name="sub_categories_id" id="sub_categories_id" class="form-control">
                @foreach ($subcat as $s)
                    <option value="{{$s->id}}">{{$s->name}}</option>
                @endforeach
            </select>
        </div>
            
        <div class="form-group">
            <label for="description">Description</label>
            <textarea name="description" id="description" cols="30" rows="10" class="form-control"></textarea>
        </div>

        <div class="form-group">
            <label for="price">Price</label>
            <input type="number" step="0.01" name="price" id="price" class="form-control">
        </div>

        <div class="form-group">
            <label for="image">Image</label>
            <input type="file" name="image" id="image" class="form-control">
        </div>

        <div class="form-group">
            <label for="stock">Stock</label>
            <input type="number" name="stock" id="stock" class="form-control">
        </div>

        <button type="submit" class="btn btn-primary mt-2">Create Product</button>
    </form>
</div>

@endsection