@extends('layouts.main')

@section('content')
<h3>Fumetto selezionato</h3>

    {{$comic->title}}

    <form action="{{route('comics.destroy', $comic->id)}}" method="POST">
        @csrf
        @method("delete")
        <button class="btn btn-danger">
            <i class="fas fa-trash"></i>
            Elimina
      </button>
    </form>

@endsection
