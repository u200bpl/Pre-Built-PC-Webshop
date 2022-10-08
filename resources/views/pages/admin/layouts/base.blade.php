<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <script src="https://kit.fontawesome.com/268c8277db.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{asset('style/style.css')}}">
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
                        <button class="dropbtn"><i class="fa-solid fa-computer"></i> Gaming PCs</button>
                        <div class="dropdown-content">
                            @foreach ($computers as $computer)
                                @if($computer->is_active)
                                    <a href="/computer/{{$computer->id}}">{{$computer->name}}</a>
                                @endif
                            @endforeach
                        </div>
                    </div> 
                </div>
                
                <div class="nav-right">
                    <a href="/cart"><i class="fa-solid fa-cart-shopping"></i> Cart</a>
                    @if (Auth::check())
                        <div class="dropdown">
                            <button class="dropbtn"><i class="fa-solid fa-user-large"></i> {{ Auth::user()->first_name }}</button>
                            <div class="dropdown-content">
                                <p><b>Welcome, {{ Auth::user()->first_name }}</b></p>
                                <hr>
                                <a href=""><i class="fa-solid fa-user-gear"></i> Account</a>
                                <a href=""><i class="fa-solid fa-cart-shopping"></i> Orders</a>
                                @if(Auth::user()->isAdmin)
                                    <a href="/admin"><i class="fa-solid fa-user-shield"></i> Admin Panel</a>
                                @endif
                                <hr>
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf
                                    <button class="nav-btn"><i class="fa-solid fa-right-from-bracket"></i> Logout</button>
                                </form>
                            </div>
                        </div>
                    @else
                        <div class="dropdown">
                            <button class="dropbtn"><i class="fa-solid fa-user-large"></i> Account</button>
                            <div class="dropdown-content">
                                <a href="/login"><i class="fa-solid fa-arrow-right-to-bracket"></i> Login</a>
                                <a href="/register"><i class="fa-solid fa-user-plus"></i> Register</a>
                            </div>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </nav>

    <div class="sidenav">
        <p><span><i class="fa-solid fa-microchip"></i></span> PC Components</p>
        <a href=""><span><i class="fa-solid fa-chevron-right"></i></span> PC Cases</a>
        <a href=""><span><i class="fa-solid fa-chevron-right"></i></span> Processors</a>
        <a href=""><span><i class="fa-solid fa-chevron-right"></i></span> Graphics Cards</a>
        <a href=""><span><i class="fa-solid fa-chevron-right"></i></span> Motherboards</a>
        <a href=""><span><i class="fa-solid fa-chevron-right"></i></span> Processor Coolers</a>
        <a href=""><span><i class="fa-solid fa-chevron-right"></i></span> Ram</a>
        <a href=""><span><i class="fa-solid fa-chevron-right"></i></span> Storage</a>
        <a href=""><span><i class="fa-solid fa-chevron-right"></i></span> Power Suplys</a>
        <hr>
        <p><span><i class="fa-solid fa-computer"></i></span> Gaming PCs</p>
        <a href="/computer/create"><span><i class="fa-solid fa-plus"></i></span> Create PC</a>

        @foreach ($computers as $computer)
            <a href="/computer/{{$computer->id}}"><span><i class="fa-solid fa-chevron-right"></i></span> {{$computer->name}}</a>
        @endforeach
    </div>

    <main class="main">
        @yield('content')
    </main>
    
    <footer>
        <div class="wrapper">
            <div class="footer-under">
                <h5>© Hydra PCs</h5>
                <p>|</p>
                <a href="">Terms of Service</a>
                <p>|</p>
                <a href="">Privacy Policy</a>
                <p>|</p>
                <a href="">Shipping Policy</a>
                <p>|</p>
                <a href="/our-warranty">Our Warranty</a>
                <p>|</p>
                <a href="">Refund Policy</a>
            </div>
        </div>
    </footer>
    <script src="{{asset('js/main.js')}}"></script>
</body>
</html>