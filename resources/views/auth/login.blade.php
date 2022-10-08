@extends('layouts.base')
@section('content')

<div class="wrapper">
    <div class="create-form">
        @if($errors->any())
            <div class="alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{$error}}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div class="form-group">
                <label for="email">Email</label>
                <hr>
                <input type="email" name="email" id="email" class="form-control" placeholder="Email">
            </div>

            <div class="form-group">
                <label for="password">Password</label>
                <hr>
                <input type="password" name="password" id="password" class="form-control" placeholder="Password">
            </div>

            <div class="form-group register">
                <button>Login</button>
            </div>
        </form>
        <p>Not an account yet? <a href="/register">Register here</a></p>
    </div>
</div>

@endsection