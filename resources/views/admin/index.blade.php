    @extends('admin.layouts.base')

    @section('content')

    <section class="card-section">
    <div class="card-section-header">
        <h2>Admin Section</h2>
    </div>
    <div class="wrapper">
        <div class="card-section-flex">
            <a href="/admin/computers/create">
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
                        <a href="/admin/computers/{{$computer->id}}/edit" class="btn-chg">Change</a>
                        <a href="/admin/computers/{{$computer->id}}" class="btn-view">View</a>
                        <form action="{{route('admin.computers.destroy', $computer->id)}}" method="post">
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