@extends('layouts.main')

@section('container')
  <h1>Post Category : {{ $category }}</h1>
  @foreach ($posts as $post)
    <h2><a href="/blog/{{ $post->slug }}">{{ $post->title }}</a></h2>
    <h5>by <a href="/author/{{ $post->author->username }}">{{ $post->author->name }}</a></h5>
    <p>{{ $post->excerpt }}</p>
    <hr>
  @endforeach
@endsection