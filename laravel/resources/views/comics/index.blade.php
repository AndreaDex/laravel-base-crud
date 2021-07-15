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
        <p>Autore : {{$comic->author}}</p>
        <p>Editore : {{$comic->editor}}</p>
        <p>1° edizione : {{$comic->date}}</p>
        <p>Trama : {{$comic->overview}}</p>
    </div>

    @endforeach

</div>

@endsection