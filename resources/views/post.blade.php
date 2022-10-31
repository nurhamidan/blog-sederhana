@extends('layouts.base')
@section('content')
    <div class="container">
        <h1 class="text-center">{{ $post['title'] }}</h1>
        <div>
            <span>By: <a href="#" class="text-decoration-none">{{ $post->user->name }}</a> in <a href="{{ url('categories/' . $post->category->slug) }}" class="text-decoration-none">{{ $post->category->name }}</a></span>
        </div>
        <p>{{ $post['body'] }}</p>
        <div>
            <a href="{{ url()->previous() }}">Back</a>
        </div>
    </div>
@endsection