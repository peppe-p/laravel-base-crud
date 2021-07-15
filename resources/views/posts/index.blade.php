@extends('structure')
@section('title', 'Lista Post')


@section('content')
    <h1>I nostri post!</h1>
    <div class="container">
        <a href="{{ route('posts.create') }}"><input class="btn" type="button" value="Crea un nuovo post"></a>
        @foreach ($posts as $post)
            <div class="post">
                <div>
                    <h4>Contenuto:</h4>
                    <p>{{ $post['content'] }}</p>
                    <br>
                    <h4>Autore:</h4>
                    <h5>{{ $post['author'] }}</h5>
                </div>
                <div>
                    <a href="{{ route('posts.show', $post->id) }}"><input class="btn" type="button"
                            value="Visualizza"></a>
                    <a href="{{ route('posts.edit', $post->id) }}"><input class="btn" type="button" value="Modifica"></a>
                </div>
            </div>
        @endforeach
    </div>
@endsection
