    @extends('pages.admin.layouts.base')

    @section('content')

<section class="">
    <div class="card-section-header">
        <h2>Admin Section</h2>
    </div>

    <div class="wrapper">
        <div class="stats">
            <div class="stats-container pending">
                <div class="stats-text">
                    <h4><i class="fa-solid fa-tags"></i> Pending Orders:</h4>
                    <p>{{ $orders->where('status','=','pending')->count() }}</p>
                </div>
            </div>

            <div class="stats-container processing">
                <div class="stats-text">
                    <h4><i class="fa-solid fa-tags"></i> Processing Orders:</h4>
                    <p>{{ $orders->where('status','=','processing')->count() }}</p>
                </div>
            </div>

            <div class="stats-container completed">
                <div class="stats-text">
                    <h4><i class="fa-solid fa-tags"></i> Completed Orders:</h4>
                    <p>{{ $orders->where('status','=','completed')->count() }}</p>
                </div>
            </div>

            <div class="stats-container tickets">
                <div class="stats-text">
                    <h4><i class="fa-solid fa-tags"></i> Open Tickets:</h4>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="admin-section">
    <div class="card-section-header">
        <h2>Order Section</h2>
    </div>

    <div class="wrapper">
        <div class="order-section">
            <div class="order">
                <table>
                    <tr>
                        <th>Oder ID</th>
                        <th>User</th>
                        <th>Products</th>
                        <th>Status</th>
                    </tr>

                    @foreach ($orders as $order)
                        <tr>
                            <td><a href="">{{ $order->order_number }}</a></td>
                            <td>{{ $order->user->first_name }} {{ $order->user->last_name }}</td>
                            <td><a href="/computer/{{ $order->computer->id }}">{{ $order->computer->name }}</a></td>
                            <td>{{ $order->status }}</td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
</section>

<section class="card-section">
    <div class="card-section-header">
        <h2>Gaming PCs Section</h2>
    </div>
    <div class="wrapper">
        <div class="card-section-flex">
            <a href="/computer/create">
                <div class="card-create">
                    <p><i class="fa-solid fa-plus"></i></p>
                </div>
            </a>
            @foreach ($computers as $computer)
                <div class="admin-card">
                    <div class="card-image">
                    @if($computer->img)
                        <img src="{{asset('img/' . $computer->img . '.png')}}" alt="Computer img">
                    @else
                        <img src="{{asset('img/no-img-found.png')}}" alt="">
                    @endif
                    </div>
                    <hr>
                    <div class="card-text">
                        <h3>{{$computer->name}}</h3>
                        <p>{{$computer->description}}</p>
                        <p class="card-section-price">€{{$computer->price}}</p>
                    </div>
                    
                    <div class="cards-admin">
                        <a href="/computer/{{$computer->id}}/edit" class="btn-chg">Change</a>
                        <a href="/computer/{{$computer->id}}" class="btn-view">View</a>
                        <form action="{{route('computer.destroy', $computer->id)}}" method="post">
                            @csrf
                            @method('DELETE')
                            <input type="submit" value="Delete" class="btn-del">
                        </form>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>

@endsection