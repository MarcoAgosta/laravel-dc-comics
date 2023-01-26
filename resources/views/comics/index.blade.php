@extends('layouts.main')

@section('content')
<h3>Lista fumetti</h3>

<ul>
@foreach ($comics as $comic)
<li>
    {{$comic->title}}
</li>
@endforeach
</ul>

@endsection
