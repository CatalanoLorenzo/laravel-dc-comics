@extends('layouts.app')
@section('content')
<div class="col">
  <form action="{{route('comics.update',$comic->id)}}" method="post">
    @csrf
    @method('PUT')
    <!-- input for title -->
    <div class="mb-3">
      <label for="title" class="form-label">Title</label>
      <input type="text" class="form-control"
       name="title" id="title" 
       aria-describedby="helpId" 
       @error ('title') is-invalid @enderror
        value="{{old('title',$comic->title)}}">
      <small id="helpId"
       class="form-text text-muted">(Max 250 char)</small>
      @error('title')
      <div class="alert alert-danger" role="alert">
        <strong>Title,Error: </strong>{{$message}}
      </div>
      @enderror
    </div>
    <!-- input for url img -->
    <div class="mb-3">
      <img src="{{$comic->thumb}}" width="300" alt="{{$comic->title}}">
      <label for="thumb" class="form-label">Url Image</label>
      <input type="text"
       @error ('thumb') is-invalid @enderror 
       class="form-control"
        name="thumb" id="thumb"
         aria-describedby="helpId"
          value="{{old('thumb',$comic->thumb)}}">
      <small id="helpId" class="form-text text-muted"></small>
      @error('thumb')
      <div class="alert alert-danger" role="alert">
        <strong>Thumb,Error: </strong>{{$message}}
      </div>
      @enderror
    </div>
    <!-- input for type -->
    <div class="mb-3">
      <label for="type" class="form-label">Type</label>
      <input type="text"
      @error ('type') is-invalid @enderror
       class="form-control" name="type" 
       id="type" aria-describedby="helpId"
        value="{{old('type',$comic->type)}}">
      <small id="helpId" class="form-text text-muted">(Max 250 char)</small>
      @error('type')
      <div class="alert alert-danger" role="alert">
        <strong>Type,Error: </strong>{{$message}}
      </div>
      @enderror
    </div>
    <!-- input for description -->
    <div class="mb-3">
      <label for="description" class="form-label">Description</label>
      <textarea class="form-control" @error ('description' ) is-invalid @enderror  name="description" id="description" rows="3">{{old('description',$comic->description)}}</textarea>
      @error('description')
        <div class="alert alert-danger" role="alert">
          <strong>Description,Error: </strong>{{$message}}
        </div>  
      @enderror
    </div>
    <!-- input for date -->
    <div class="mb-3">
      <label for="sale_date" class="form-label">Sale date</label>
      <input type="date" @error ('sale_data' ) is-invalid @enderror class="form-control" name="sale_date" id="sale_date" aria-describedby="helpId" value="{{old('sale_date',$comic->sale_date)}}">
      <small id="helpId" class="form-text text-muted">Select correct date (dd-mm-yyyy)</small>
      @error('sale_date')
      <div class="alert alert-danger" role="alert">
        <strong>Sale Date,Error: </strong>{{$message}}
      </div>
      @enderror
    </div>
    <!-- input for price -->
    <div class="mb-3">
      <label for="price" class="form-label">Price</label>
      <input type="number" @error ('price') is-invalid @enderror class="form-control" name="price" id="price" aria-describedby="helpId" value="{{old('price',$comic->price)}}" step="0.1">
      <small id="helpId" class="form-text text-muted text-danger">solo number max price 999,99</small>
      @error('price')
      <div class="alert alert-danger" role="alert">
        <strong>Price,Error: </strong>{{$message}}
      </div>
      @enderror
    </div>
    <div class="container">
      <div class="row">
        <div class="col d-flex justify-content-end">
          <!-- button for send and reset -->
          <button type="submit" class="btn btn-success  m-1">Update COMICS</button>
        </div>
      </div>
    </div>
  </form>
</div>
@endsection