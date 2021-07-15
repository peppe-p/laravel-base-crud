@extends('structure')
@section('title', 'Modifica Post')

@section('content')
    <h1>
        Modifica Post n.{{ $post['id'] }}
        <br>
        scritto da {{ $post['author'] }}
    </h1>

    <div class="container">
        <form action="{{ route('posts.update', $post->id) }}" method="post">
            @csrf
            @method('PUT')
            <div>
                <label for="author">Autore</label>
                <br>
                <input placeholder="Autore" type="text" name="author" id="author" value="{{ $post['author'] }}">
            </div>
            <div>
                <label for="content">Contenuto</label>
                <br>
                <textarea placeholder="Contenuto" type="text" name="content"
                    id="content">{{ $post['content'] }}</textarea>
            </div>

            <input class="btn" type="submit" value="Conferma">
        </form>
        <form action="{{ route('posts.destroy', $post->id) }}" method="post">
            @csrf
            @method('DELETE')
            <input class="btn delete" type="submit" value="Elimina">
        </form>
    </div>
@endsection
