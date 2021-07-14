@extends('home')
@section('title', 'Post')

@section('content')
    <h1>{{ $post['author'] }}</h1>
    <p>{{ $post['content'] }}</p>
@endsection
