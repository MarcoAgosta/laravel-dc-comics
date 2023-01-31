@extends('layouts.main')

@section('content')
<h3>Aggiungi fumetto</h3>

<div class="container">

@if($errors->any())
  <h2>Ci sono errori</h2>
@endif

<form action="{{route('comics.store')}}" method="POST">
    @csrf
  <div class="form-group has-validation">
    <label>Title</label>
    <input type="text" class="form-control" name="title">
    @error('title')
    <div> 
      {{$message}}
    </div>
    @enderror
  </div>

  <div class="form-group">
    <label>Description</label>
    <input type="text" class="form-control" name="description">
    @error('description')
    <div> 
      {{$message}}
    </div>
    @enderror
  </div>

  <div class="form-group">
    <label>Thumb</label>
    <input type="text" class="form-control" name="thumb">
    @error('thumb')
    <div> 
      {{$message}}
    </div>
    @enderror
  </div>

  <div class="form-group">
    <label>Price</label>
    <input type="text" class="form-control" name="price">
    @error('price')
    <div> 
      {{$message}}
    </div>
    @enderror
  </div>

  <div class="form-group">
    <label>Series</label>
    <input type="text" class="form-control" name="series">
    @error('series')
    <div> 
      {{$message}}
    </div>
    @enderror
  </div>

  <div class="form-group">
    <label>Sale Date</label>
    <input type="text" class="form-control" name="sale_date">
    @error('sale_date')
    <div> 
      {{$message}}
    </div>
    @enderror
  </div>

  <div class="form-group">
    <label>Type</label>
    <input type="text" class="form-control" name="type">
    @error('type')
    <div> 
      {{$message}}
    </div>
    @enderror
  </div>

  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>

@endsection
