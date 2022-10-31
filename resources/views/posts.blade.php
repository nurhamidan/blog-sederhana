@extends('layouts.base')
@section('title', 'Blog')
@section('content')
    <div class="container mt-5">
            @foreach ($posts as $post)
                <article class="border-bottom mb-3">
                    <a href="{{ url('blog/' . $post['slug']) }}" class="text-decoration-none">
                        <h1>{{ $post['title'] }}</h1>
                    </a>
                    <span class="d-block mb-3">By: <a href="#" class="text-decoration-none">{{ $post->user->name }}</a> in <a href="{{ url('categories/' . $post->category->slug) }}" class="text-decoration-none">{{ $post->category->name }}</a></span>
                    <p>{{ $post['excerpt'] }}</p>
                </article>
            @endforeach
    </div>
@endsection