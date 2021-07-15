@extends('structure')
@section('title', 'Create Post')

@section('content')
    <h1>Crea il tuo post</h1>
    <div class="container">
        <form action="{{ route('posts.store') }}" method="post">
            @csrf
            <div>
                <label for="author">Autore</label>
                <br>
                <input placeholder="Autore" type="text" name="author" id="author">
            </div>
            <div>
                <label for="content">Contenuto</label>
                <br>
                <textarea placeholder="Contenuto" type="text" name="content" id="content"></textarea>
            </div>

            <input class="btn" type="submit" value="Crea Post">
        </form>
    </div>
@endsection
