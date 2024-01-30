@extends("layouts.app")

@section("content")
<div class="container">
    <div class="row">
       <h1 class="text-center">I NOSTRI FUMETTI</h1>
    </div> 

    <div class="row">
        @foreach ($products as $item)
            <div class="col-4 my-2">
                <div class="card" style="width: 18rem;">
                    <img src={{ $item->cover }} class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">{{ $item->title }}</h5>
                        <p class="card-text">{{ $item->price }}</p>
                        <a href="{{ route("comics.show", $item->id) }}" class="btn btn-primary">Mostra di più</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

</div>

    
        
       
@endsection