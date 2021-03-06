@extends('layout.app')

@section('title', 'add a new omics')

@section('content')


<div class="container">
    <h1>ADD A NEW COMIC</h1>

    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    <form action="{{route('comics.store')}}" method="POST">
        @csrf
        <div class="form_group">
            <label for="title">title</label>

            <input type="text" name="title" id="title" value="{{old('title')}}">
        </div>

        <div class="form_group">
            <label for="author">author</label>
            <input type="text" name="author" id="author" value="{{old('author')}}">
        </div>

        <div class="form_group">
            <label for="editor">editor</label>

            <input type="text" name="editor" id="editor" value="{{old('editor')}}">
        </div>

        <div class="form_group">
            <label for="year">year</label>

            <input type="date" name="year" id="year" value="{{old('year')}}">
        </div>

        <div class="form_group">
            <label for="poster">poster</label>

            <input type="text" name="poster" id="poster" value="{{old('poster')}}">
        </div>

        <div class="form_group">
            <label for="overview">overview</label>

            <textarea name="overview" id="overview" cols="30" rows="10">{{old('overview')}}</textarea>
        </div>
        <button type="submit">Add</button>
    </form>
</div>

@endsection

@section('js')
<!-- JS -->
<script src="{{asset('js/app.js')}}"></script>
@endsection