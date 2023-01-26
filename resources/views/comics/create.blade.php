@extends('layouts.main')

@section('content')
<h3>Aggiungi fumetto</h3>

<div class="container">

<form action="{{route('comics.store')}}" method="POST">
    @csrf
  <div class="form-group">
    <label>Title</label>
    <input type="text" class="form-control" name="title">
  </div>
  <div class="form-group">
    <label>Description</label>
    <input type="text" class="form-control" name="description">
  </div>
  <div class="form-group">
    <label>Thumb</label>
    <input type="text" class="form-control" name="thumb">
  </div>
  <div class="form-group">
    <label>Price</label>
    <input type="text" class="form-control" name="price">
  </div>
  <div class="form-group">
    <label>Series</label>
    <input type="text" class="form-control" name="series">
  </div>
  <div class="form-group">
    <label>Sale Date</label>
    <input type="text" class="form-control" name="sale_date">
  </div>
  <div class="form-group">
    <label>Type</label>
    <input type="text" class="form-control" name="type">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>

@endsection
