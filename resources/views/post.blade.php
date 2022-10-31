@extends('layouts.base')
@section('content')
    <div class="container">
        <h1 class="text-center">{{ $post['title'] }}</h1>
        <div>
            <span>By: {{ $post['author'] }}</span>
        </div>
        <p>{{ $post['body'] }}</p>
        <div>
            <a href="{{ url('blog') }}">Back</a>
        </div>
    </div>
@endsection