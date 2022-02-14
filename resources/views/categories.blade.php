{{-- @dd($posts) --}}
@extends('layouts.main')
@section('container')

    <h1 class="mb-5">Post Category</h1>
    @foreach ($categories as $category)
        <ul>
            <li>
                <h2>
                    <a href="/categories/{{ $category->slug }}">
                        {{ $category->name }}</a>
                </h2>
            </li>
        </ul>


        {{-- <h5>By: {{ $post['author'] }}</h5> --}}
    @endforeach
@endsection
