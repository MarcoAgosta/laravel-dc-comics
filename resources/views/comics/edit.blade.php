@extends('layouts.main')

@section('content')
<h3>Aggiungi fumetto</h3>

<div class="container">

<form action="{{route('comics.update', $comic->id)}}" method="POST">
    @csrf
    @method('PUT')
  <div class="form-group">
    <label>Title</label>
    <input type="text" class="form-control" name="title" value="{{$comic->title}}">
  </div>
  <div class="form-group">
    <label>Description</label>
    <input type="text" class="form-control" name="description" value="{{$comic->description}}">
  </div>
  <div class="form-group">
    <label>Thumb</label>
    <input type="text" class="form-control" name="thumb" value="{{$comic->thumb}}">
  </div>
  <div class="form-group">
    <label>Price</label>
    <input type="text" class="form-control" name="price" value="{{$comic->price}}">
  </div>
  <div class="form-group">
    <label>Series</label>
    <input type="text" class="form-control" name="series" value="{{$comic->series}}">
  </div>
  <div class="form-group">
    <label>Sale Date</label>
    <input type="text" class="form-control" name="sale_date" value="{{$comic->sale_date}}">
  </div>
  <div class="form-group">
    <label>Type</label>
    <input type="text" class="form-control" name="type" value="{{$comic->type}}">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>

@endsection