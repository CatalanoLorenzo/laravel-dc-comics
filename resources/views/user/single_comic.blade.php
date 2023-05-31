@extends('layouts.app')
@section('title')
@section('jumbo')
<section class="jumbo">
    <img src="{{Vite::asset('resources/img/jumbotron.jpg')}}" alt="">
</section>
@endsection
@section('content')
<section class="showcard bg-white position-relative">
        <a href="{{route('comics.index')}}">admin</a>
        <div class="current_series p-2 text-center position-absolute">
            <img src="{{$comic->thumb}}" alt="{{$comic->title}}" class="img_comic position-relative">
        </div>
    <div class="container  bg-white">
        <div class="row  py-5 bg-white">
            <div class="col-8 p-2 bg-white text-black">
                    <h2>{{$comic->title}}</h2>
                    <div class="d-flex justify-content-between align-items-baseline bg-success text-white w-100">
                        <span>U.S. Price: <strong>{{$comic->price}}</strong></span>
                        <span>avviable <button class="border-0 bg-success text-white p-4">Check Avviability</button></span>
                    </div>
                    <p>{{$comic->description}}</p>
            </div>
            <div class="col-2">
                <img src="{{Vite::asset('resources/img/adv.jpg')}}" alt="">
            </div>
            
        </div>
       
        
    </div>
</section>
@endsection