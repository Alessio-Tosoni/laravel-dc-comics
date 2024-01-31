@extends("layouts.app")

@section('content')
    <div class="container">
        <div class="row">
            <h2>inserisci nuovo fumetto</h2>
            @if ($errors->any())
                <div class="alert alert-secondary" role="alert">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
        </div>
        <div class="row">
            <form action="{{ route('comics.store') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="title" class="form-label">Title</label>
                    <input type="text" class="form-control" id="title" name="title" >
                    
                </div>
                <div class="mb-3">
                    <label for="cover" class="form-label">Cover</label>
                    <input type="text" class="form-control" id="cover" name="cover" >
                  
                </div>
                <div class="mb-3">
                    <label for="Price" class="form-label">Price</label>
                    <input type="text" class="form-control" id="price" name="price" >
                    
                </div>
                <button type="submit" class="btn btn-primary">Salva</button>
            </form>
        </div>
    </div>
@endsection