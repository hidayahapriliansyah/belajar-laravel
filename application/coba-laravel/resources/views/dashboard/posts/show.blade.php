@extends('dashboard.layouts.main')

@section('container')
<div class="container">
  <div class="row">
    <div class="col-lg-8">
      <article class="mt-4">
        <h2>{{ $post->title }}</h2>
        <a href="/dashboard/posts" class="badge bg-success text-decoration-none"><span data-feather="arrow-left"></span> Back to my posts</a>
        <a href="#" class="badge bg-warning text-decoration-none"><span data-feather="edit"></span> Edit</a>
        <a href="#" class="badge bg-danger text-decoration-none"><span data-feather="x-circle"></span> Delete</a>
        <img src="/img/{{ $post->category->slug }}-hero.jpg" class="card-img-top my-3" alt="{{ $post->category->slug }}">
        <small>Post in <a href="/blog?category={{ $post->category->slug }}" class="text-decoration-none">{{ $post->category->name }}</a> {{ $post->created_at->diffForHumans() }}</small>
        <p>{!! $post->body !!}</p>
        <p><a href="/blog" class="text-decoration-none">Back to posts</a></p>
      </article>
    </div>
  </div>
</div>
@endsection