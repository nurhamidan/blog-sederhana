@extends('layouts.base')
@section('title', 'Blog')
@section('content')
    <div class="container">
        <article>
            @foreach ($posts as $post)
            <a href="{{ url('blog/' . $post['slug']) }}">
                <h1>{{ $post['title'] }}</h1>
            </a>
            <span class="d-block mb-3">By: {{ $post['author'] }}</span>
            <p>{{ $post['excerpt'] }}</p>
            @endforeach
        </article>
    </div>
@endsection