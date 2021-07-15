@extends('layout.app')

@section('title', ' Comics')

@section('content')


<div class="gallery">

    @foreach($comics as $comic)

    <div class="card">
        <a href="{{route('comics.show', $comic->id )}}">
            <img src="{{$comic->poster}}" alt="">
            <h2>{{$comic->title}}</h2>
        </a>

        <div class="btn_container">
            <a href="{{route('comics.edit', $comic->id)}}"><button class="edit">Edit</button></a>


            <form action="{{route('comics.destroy', $comic->id)}}" method="POST">
                @method('DELETE')
                @csrf


                <button type="submit" id="destroy">Delete</button>
            </form>
        </div>
    </div>

    @endforeach

</div>

@endsection