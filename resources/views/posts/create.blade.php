@extends('structure')
@section('title', 'Create Post')

@section('content')
    <h1>Crea il tuo post</h1>
    <form action="{{ route('posts.store') }}" method="post">
        @csrf
        <label for="author">Autore</label>
        <input placeholder="Autore" type="text" name="author" id="author">
        <br>
        <label for="content">Contenuto</label>
        <input placeholder="Contenuto" type="text" name="content" id="content">
        <br>
        <input type="submit" value="Crea Post">
    </form>
@endsection
