@extends('layouts.base')
@section('title', 'Blog')
@section('content')
    <div class="container">
        <h1>Category: {{ $category->name }}</h1>
        @foreach ($category->posts as $post)
            <article class="border-bottom mt-5">
                <a href="{{ url('blog/' . $post['slug']) }}">
                    <h1>{{ $post['title'] }}</h1>
                </a>
                <span class="d-block mb-3">By: {{ $post['author'] }}</span>
                <p>{{ $post['excerpt'] }}</p>
            </article>
        @endforeach
    </div>
@endsection