@extends('template')

@section('content')

    <h3>{{ $post->title }}</h3>
    {{ $post->content }}

@endsection
