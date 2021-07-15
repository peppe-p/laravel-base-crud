@extends('home')
@section('title', 'Post')

@section('content')
    <div class="container">
        <div class="post">
            <div>
                <h2>{{ $post['author'] }}</h2>
                <p>{{ $post['content'] }}</p>
            </div>
            <div>
                <a href="{{ route('posts.edit', $post->id) }}"><input class="btn" type="button" value="Modifica"></a>
                <form action="{{ route('posts.destroy', $post->id) }}" method="post">
                    @csrf
                    @method('DELETE')
                    <input class="btn delete" type="submit" value="Elimina">
                </form>
            </div>
        </div>
    </div>
@endsection
