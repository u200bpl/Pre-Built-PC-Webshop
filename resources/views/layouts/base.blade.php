<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <script src="https://kit.fontawesome.com/268c8277db.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{asset('style/style.css')}}">
    <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css'>      
    
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <nav>
        <div class="wrapper">
            <div class="navbar">
                <div class="logo">
                    <a href="/"><img src="..." alt="Company Logo"></a>
                </div>

                <div class="nav-links">
                    <a href="/"><i class="fa-solid fa-house"></i> Home</a>
                    <div class="dropdown">
                        <button class="dropbtn"><i class="fa-solid fa-computer"></i> Computers</button>
                        <div class="dropdown-content">
                            @foreach ($computers as $computer)
                                <a href="/computers/{{$computer->id}}">{{$computer->name}}</a>
                            @endforeach
                        </div>
                    </div> 
                </div>

                <div class="nav-right">
                    <a href="/cart">Cart</a>
                    <a href="/login">Login</a>
                </div>
            </div>
        </div>
    </nav>

    <main>
        @yield('content')
    </main>

    <script src="{{asset('js/main.js')}}"></script>
</body>
</html>