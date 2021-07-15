@extends('structure')
@section('title', 'Home')

@section('content')
    <div class="container">
        <div class="btn_home">
            <a href="{{ route('posts.create') }}"><input class="btn" type="button" value="Crea un nuovo post"></a>
            <a href="{{ route('posts.index') }}"><input class="btn" type="button" value="Visualizza i posts"></a>
        </div>
    </div>
@endsection
