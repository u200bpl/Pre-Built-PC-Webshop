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
                    <a href="/cart"><span><i class="fa-solid fa-cart-shopping"></i></span> Cart</a>
                    @if (Auth::check())
                        <div class="dropdown">
                            <button class="dropbtn"><span><i class="fa-solid fa-user-large"></i></span> {{ Auth::user()->first_name }}</button>
                            <div class="dropdown-content">
                                <p><b>Welcome, {{ Auth::user()->first_name }}</b></p>
                                <hr>
                                <a href=""><span><i class="fa-solid fa-user-gear"></i></span> Account</a>
                                <a href=""><span><i class="fa-solid fa-cart-shopping"></i></span> Orders</a>
                                @if(Auth::user()->isAdmin)
                                    <a href="/admin"><span><i class="fa-solid fa-user-shield"></i></span> Admin Panel</a>
                                @endif
                                <hr>
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf
                                    <button class="nav-btn"><span><i class="fa-solid fa-right-from-bracket"></i></span> Logout</button>
                                </form>
                            </div>
                        </div>
                    @else
                        <div class="dropdown">
                            <button class="dropbtn"><span><i class="fa-solid fa-user-large"></i></span> Account</button>
                            <div class="dropdown-content">
                                <a href="/login"><span><i class="fa-solid fa-arrow-right-to-bracket"></i></span> Login</a>
                                <a href="/register"><span><i class="fa-solid fa-user-plus"></i></span> Register</a>
                            </div>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </nav>

    <div class="sidenav">
        <p><span><i class="fa-solid fa-microchip"></i></span> PC Components</p>
        <a href="/admin/pccase/create"><span><i class="fa-solid fa-chevron-right"></i></span> PC Cases</a>
        <a href="/admin/processor/create"><span><i class="fa-solid fa-chevron-right"></i></span> Processors</a>
        <a href="/admin/graphicscard/create"><span><i class="fa-solid fa-chevron-right"></i></span> Graphics Cards</a>
        <a href="/admin/motherboard/create"><span><i class="fa-solid fa-chevron-right"></i></span> Motherboards</a>
        <a href="/admin/processorcooler/create"><span><i class="fa-solid fa-chevron-right"></i></span> Processor Coolers</a>
        <a href="/admin/ram/create"><span><i class="fa-solid fa-chevron-right"></i></span> Ram</a>
        <a href="/admin/storage/create"><span><i class="fa-solid fa-chevron-right"></i></span> Storage</a>
        <a href="/admin/psu/create"><span><i class="fa-solid fa-chevron-right"></i></span> Power Suplys</a>
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