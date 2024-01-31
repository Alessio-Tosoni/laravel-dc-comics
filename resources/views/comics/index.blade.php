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
                        <div class="d-flex justify-content-evenly">
                            <div class=" mx-1">
                                <a href="{{ route("comics.show", $item->id) }}" class="btn btn-primary   ">Dettaglio</a>
                            </div>
                            <div class=" mx-1">
                                <a href="{{ route("comics.edit", $item->id) }}" class="btn btn-warning   ">Modifica</a>
                            </div>
                            <form action="{{ route('comics.destroy', $item->id) }}" method="POST" class="d-inline-block">
                                @csrf
                                @method('DELETE')
                                <input type="submit" value="Cancella" class="btn btn-danger">
                            </form>
                                
                            
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

</div>

    
        
       
@endsection