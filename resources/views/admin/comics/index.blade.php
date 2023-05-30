@extends('layouts.app')
@section('content')
<div class="col">
    <!-- banner se si viene da store -->
    @if (session('message'))
    <div class="alert alert-success" role="alert">
        <strong>{{session('message')}}</strong>
    </div>
    @endif
    <a class="btn btn-primary m-3" href="{{route('comics.create')}}" role="button">+New Comic</a>
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
                    <td class="">
                        <a class="btn btn-primary" href="{{route('comics.show',$comic)}}" role="button">VIEW</a>
                        <a class="btn btn-primary" href="{{route('comics.edit',$comic)}}" role="button">EDIT</a>

                        <!-- Modal trigger button -->
                        <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#modal-{{$comic->id}}">
                            Delete
                        </button>

                        <!-- Modal Body -->
                        <!-- if you want to close by clicking outside the modal, delete the last endpoint:data-bs-backdrop and data-bs-keyboard -->
                        <div class="modal fade" id="modal-{{$comic->id}}" tabindex="-1" data-bs-backdrop="static" data-bs-keyboard="false" role="dialog" aria-labelledby="modal-{{$comic->id}}" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-sm" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="modal-{{$comic->id}}">Delete {{$comic->title}} </h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        are you very very very very very very very very very very very sure?
                                    </div>
                                    <div class="modal-footer">

                                        <form action="{{route('comics.destroy',$comic->id)}}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger">yes!</button>
                                        </form>

                                        <button type="button" class="btn btn-secondary " data-bs-dismiss="modal">Nop!</button>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <!-- Optional: Place to the bottom of scripts -->
                        <script>
                            const myModal = new bootstrap.Modal(document.getElementById('modalId'), options)
                        </script>






                    </td>
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