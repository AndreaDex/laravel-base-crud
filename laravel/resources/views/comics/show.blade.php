@extends('layout.app')

@section('title', ' Comic')

@section('content')
<div class="show">

    <div class="container">
        <small>Titolo:</small>
        <h1>{{$comic->title}}</h1>


        <div class="info">
            <p>Autore : {{$comic->author}}</p>
            <p>Editore : {{$comic->editor}}</p>
            <p>1° edizione : {{$comic->year}}</p>
            <p>Trama : {{$comic->overview}}</p>
        </div>

        <div class="images">
            <img src="{{$comic->poster}}" alt="{{$comic->title}} poster">
        </div>
    </div>
</div>

@endsection