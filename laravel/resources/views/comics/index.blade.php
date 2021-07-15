@extends('layout.app')

@section('title', ' Comics')

@section('content')

<h1>Manga DB</h1>

<div class="gallery">
    @foreach($comics as $comic)

    <div class="card">
        <a href="{{route('comics.show', $comic->id )}}">
            <img src="{{$comic->poster}}" alt="">
            <h3>{{$comic->title}}</h3>
        </a>


        <a href="{{route('comics.edit', $comic->id)}}"><button>Edit</button></a>


        <form action="{{route('comics.destroy', $comic->id)}}" method="POST">
            @method('DELETE')
            @csrf


            <button type="submit">Delete</button>
        </form>
    </div>

    @endforeach

</div>

@endsection