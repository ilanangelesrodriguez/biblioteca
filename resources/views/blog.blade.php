@extends('template')

@section('content')

    <h1>Blog</h1>

    <ul>
        @foreach($posts as $post)
            <li>
                <strong>{{ $post['id'] }}. </strong>
                <a href="{{ route('post', $post['slug']) }}">{{ $post['title'] }}</a>
                <br>
                <span>{{ $post->user->name }}</span>
            </li>
        @endforeach

        {{ $posts->links() }}
    </ul>

@endsection
