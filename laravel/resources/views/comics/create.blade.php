@extends('layout.app')

@section('title', 'add a new omics')

@section('content')


<div class="container">
    <h1>ADD A NEW COMIC</h1>

    <form action="{{route('comics.store')}}" method="POST">
        @csrf
        <div class="form_group">
            <label for="title">title</label>

            <input type="text" name="title" id="title">
        </div>

        <div class="form_group">
            <label for="author">author</label>
            <input type="text" name="author" id="author">
        </div>

        <div class="form_group">
            <label for="editor">editor</label>

            <input type="text" name="editor" id="editor">
        </div>

        <div class="form_group">
            <label for="year">year</label>

            <input type="date" name="year" id="year">
        </div>

        <div class="form_group">
            <label for="poster">poster</label>

            <input type="text" name="poster" id="poster">
        </div>

        <div class="form_group">
            <label for="overview">overview</label>

            <textarea name="overview" id="overview" cols="30" rows="10"></textarea>
        </div>
        <button type="submit">Add</button>
    </form>
</div>

@endsection

@section('js')
<!-- JS -->
<script src="{{asset('js/app.js')}}"></script>
@endsection