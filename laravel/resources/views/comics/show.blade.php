@extends('layout.app')

@section('title', ' Comic')

@section('content')

<h1>{{$comic->title}}</h1>


<div class="info">
    <p>Autore : {{$comic->author}}</p>
    <p>Editore : {{$comic->editor}}</p>
    <p>1° edizione : {{$comic->date}}</p>
    <p>Trama : {{$comic->overview}}</p>
</div>

<img src="{{$comic->poster}}" alt="">

@endsection