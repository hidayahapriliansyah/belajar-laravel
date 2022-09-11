@extends('layouts.main')

@section('container')
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-8">
        <article class="mt-4">
          <h2>{{ $post->title }}</h2>
          <img src="/img/{{ $post->category->slug }}-hero.jpg" class="card-img-top my-3" alt="{{ $post->category->slug }}">
          <small>By <a href="/author/{{ $post->author->username }}" class="text-decoration-none">{{ $post->author->name }}</a> in <a href="/categories/{{ $post->category->slug }}" class="text-decoration-none">{{ $post->category->name }}</a> {{ $post->created_at->diffForHumans() }}</small>
          <p>{!! $post->body !!}</p>
          <p><a href="/blog" class="text-decoration-none">Back to posts</a></p>
        </article>
      </div>
    </div>
  </div>
@endsection