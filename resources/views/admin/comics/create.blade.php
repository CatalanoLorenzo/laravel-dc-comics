@extends('layouts.app')
@section('content')
<div class="col">
    <form action="{{route('comics.store')}}" method="post">
    @csrf
        <!-- input for title -->
    <div class="mb-3">
      <label for="title" class="form-label">Title</label>
      <input type="text"
        class="form-control" name="title" id="title" aria-describedby="helpId" placeholder="write here new title comcis ">
      <small id="helpId" class="form-text text-muted">(Max 250 char)</small>
    </div>
       <!-- input for url img -->
    <div class="mb-3">
      <label for="thumb" class="form-label">Url Image</label>
      <input type="text"
        class="form-control" name="thumb" id="thumb" aria-describedby="helpId" placeholder="write here new url image comcis ">
      <small id="helpId" class="form-text text-muted"></small>
    </div>
        <!-- input for type -->
    <div class="mb-3">
      <label for="type" class="form-label">Type</label>
      <input type="text"
        class="form-control" name="type" id="type" aria-describedby="helpId" placeholder="write here new type comcis ">
      <small id="helpId" class="form-text text-muted">(Max 250 char)</small>
    </div>
        <!-- input for description -->
    <div class="mb-3">
      <label for="description" class="form-label">Description</label>
      <textarea class="form-control" name="description" id="description" rows="3" placeholder="write here new description comics"></textarea>
    </div>
        <!-- input for date -->
    <div class="mb-3">
      <label for="sale_date" class="form-label">Sale date</label>
      <input type="date"
        class="form-control" name="sale_date" id="sale_date" aria-describedby="helpId" placeholder="write here new sale date comics">
      <small id="helpId" class="form-text text-muted">Select correct date (dd-mm-yyyy)</small>
    </div>
    <!-- input for price -->
<div class="mb-3">
  <label for="price" class="form-label">Price</label>
  <input type="number"
    class="form-control" name="price" id="price" aria-describedby="helpId" placeholder="999.99" step="0.1">
  <small id="helpId" class="form-text text-muted text-danger">solo number max price 999,99</small>
</div>
<div class="container">
    <div class="row">
        <div class="col d-flex justify-content-end">
            <!-- button for send and reset -->
            <button type="submit" class="btn btn-success  m-1">Upload NEW COMICS</button>
            <button type="reset" class="btn btn-danger m-1">Reset</button>
        </div>
    </div>
</div>
    </form>
</div>
@endsection