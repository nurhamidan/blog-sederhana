@extends('layouts.base')
@section('title', 'Categories')
@section('content')
    <div class="container">
        <h1>Categories</h1>
        <ul style="list-style: none">
            @foreach ($categories as $category)
                <li>
                    <a href="{{ url('categories/' . $category->slug) }}">
                        <h2>{{ $category->name }}</h2>
                    </a>
                </li>
            @endforeach
        </ul>
        <article>
        </article>
    </div>
@endsection