@extends('home')
@section('title', 'Post')

@section('content')
    <div class="container">
        <a href="{{ route('posts.edit', $post->id) }}"><input class="btn" type="button" value="Modifica"></a>
        <a href="{{ route('posts.destroy', $post->id) }}"><input class="btn" type="button" value="Elimina"></a>
        <div class="post">
            <h1>{{ $post['author'] }}</h1>
            <p>{{ $post['content'] }}</p>
        </div>
    </div>
@endsection
