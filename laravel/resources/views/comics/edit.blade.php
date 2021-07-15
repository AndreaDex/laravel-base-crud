@extends('layout.app')

@section('title', 'Edit')

@section('content')

<h1>EDIT COMIC</h1>


<form action="{{route('comics.update', $comic->id)}}" method="POST">
    @csrf
    @method('PUT')

    <div>
        <label for="title">title</label>

        <input type="text" name="title" id="title" value="{{$comic->title}}">
    </div>

    <div>
        <label for="author">author</label>
        <input type="text" name="author" id="author" value="{{$comic->author}}">
    </div>

    <div>
        <label for="editor">editor</label>

        <input type="text" name="editor" id="editor" value="{{$comic->editor}}">
    </div>

    <div>
        <label for="year">year</label>

        <input type="date" name="year" id="year" value="{{$comic->year}}">
    </div>

    <div>
        <label for="poster">poster</label>

        <input type="text" name="poster" id="poster" value="{{$comic->poster}}">
    </div>

    <div>
        <label for="overview">overview</label>

        <textarea name="overview" id="overview" cols="30" rows="10">{{$comic->overview}}</textarea>
    </div>
    <button type="submit">Add</button>
</form>

@endsection