@extends('layouts.main')

@section('container')
  <div class="container mt-4">
    <h1>Halaman Author</h1>
    <h2>{{ $author->name }}</h2>

    @foreach ($posts as $post)
      <article class="mb-5">
        <h2><a href="/blog/{{ $post->slug }}">{{ $post->title }}</a></h2>
        <p>By <a href="">{{ $post->author->name }}</a> in <a href="/category/{{ $post->category->slug }}">{{ $post->category->name }}</a></p>
        <p>{{ $post->excerpt }}</p>
      </article>
      <hr>
    @endforeach

  </div>
@endsection