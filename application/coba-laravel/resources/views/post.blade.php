@extends('layouts.main')

@section('container')
  <article class="mt-4">
    <h2>{{ $post->title }}</h2>
    <h5><a href="/category/{{ $post->category->slug }}">{{ $post->category->name }}</a></h5>
    <p>{!! $post->body !!}</p>
  </article>
@endsection