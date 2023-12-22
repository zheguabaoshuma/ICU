<!-- resources/views/newpage.blade.php -->
@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>帖子</h1>
        <p>有些什么呢?</p>
        <table>
            @foreach ($posts as $post)
                <span>
                    <a href="{{ url('posts/'.$post->id) }}">
                        {{ $post->title }}
                    </a>
                </span>
            @endforeach
        </table>

    </div>

    <link rel="stylesheet" href="{{ asset('css/posts.css') }}">
@endsection
