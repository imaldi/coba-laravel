@extends('layouts.main')

@section('container')
    <article class="mb-5">
        <h2>
            {{ $post->title }}
        </h2>
        {{-- <h5>By: {{ $post['author'] }}</h5> --}}
        <h5>By: Aldi Irsan Majid in <a href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a>
        </h5>
        {!! $post->body !!}
    </article>
    <a href="/posts">Back to Posts</a>
@endsection
