@extends('layouts.app')
@section('title')
    {{$comic->title}}
@endsection
@section('content')
    <div class="col">
        <a name="" id="" class="btn btn-primary" href="{{route('comics.index')}}" role="button">Return Back</a>
        <h1>{{$comic->title}}</h1>
        <div class="card">
            <img class="card-img-top" src="{{$comic->thumb}}" alt="{{$comic->title}}">
            <div class="card-body">
                <h4 class="card-title">{{$comic->title}}</h4>
                <p class="card-text">{{$comic->description}}</p>
            </div>
            <div class="card-footer">
                <p>{{$comic->type}}</p>
                <span>{{$comic->price}}</span>
                <p>{{$comic->sale_date}}</p>
            </div>
        </div>
    </div>
@endsection