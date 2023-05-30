@extends('layouts.app')
@section('content')
<div class="col">
    <!-- banner se si viene da store -->
    @if (session('message'))
    <div class="alert alert-success" role="alert">
        <strong>{{session('message')}}</strong>
    </div>
    @endif
    <a class="btn btn-primary" href="{{route('comics.create')}}" role="button">+New Comic</a>
    <div class="table-responsive">
        <table class="table table-striped
            table-hover	
            table-borderless
            table-primary
            align-middle">
            <thead class="table-light">
                <caption>Comics</caption>
                <tr>
                    <th>ID</th>
                    <th>Thumb</th>
                    <th>Title</th>
                    <th>price</th>
                    <th>sale_date</th>
                    <th>type</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody class="table-group-divider">
                @forelse ($comics as $comic)
                <tr class="table-primary">
                    <td scope="row">{{$comic->id}}</td>
                    <td><img src="{{$comic->thumb}}" width="50" height="100" alt="{{$comic->title}}"></td>
                    <td>{{$comic->title}}</td>
                    <td>{{$comic->price}}</td>
                    <td>{{$comic->sale_date}}</td>
                    <td>{{$comic->type}}</td>
                    <td>VIEW/EDIT/DELETE</td>
                </tr>
                @empty
                <tr class="table-primary">

                    <td scope="row">NO COMICS INFO</td>
                </tr>

                @endforelse


            </tbody>
        </table>
    </div>
</div>

@endsection