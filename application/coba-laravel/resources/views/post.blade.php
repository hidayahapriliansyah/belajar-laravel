@extends('layouts.main')

@section('container')
  <article class="mt-4">
    <h2>{{ $post->title }}</h2>
    <h5>By <a href="/author/{{ $post->author->id }}">{{ $post->author->name }}</a> in <a href="/category/{{ $post->category->slug }}">{{ $post->category->name }}</a></h5>
    <p>{!! $post->body !!}</p>
    <p><a href="/blog">Back to posts</a></p>
  </article>
@endsection