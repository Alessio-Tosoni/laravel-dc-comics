@extends("layouts.app")

@section("content")
<div class="container">
    <div class="row">
       <h1 class="text-center">{{ $dettaglio->title }}</h1>
    </div> 

    <div class="row">
        <div class="col-5">
            <p>{{$dettaglio->title}}</p>
            <img src= {{$dettaglio->cover}} alt="">
            <p>{{$dettaglio->price}}</p>
            </div>
       
    </div>

</div>

    
        
       
@endsection 