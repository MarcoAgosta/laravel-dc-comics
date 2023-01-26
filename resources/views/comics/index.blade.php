@extends('layouts.main')

@section('content')
<h3>Lista fumetti</h3>

<ul>
@foreach ($comics as $comic)
<li></li>
@endforeach
</ul>

@endsection
