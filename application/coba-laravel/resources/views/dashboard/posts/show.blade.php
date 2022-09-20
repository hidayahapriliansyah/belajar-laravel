@extends('dashboard.layouts.main')

@section('container')
<div class="container">
  <div class="row">
    <div class="col-lg-8">
      <article class="mt-4">
        <h2>{{ $post->title }}</h2>
        <a href="/dashboard/posts" class="badge bg-success text-decoration-none"><span data-feather="arrow-left"></span> Back to my posts</a>
        <a href="/dashboard/posts/{{ $post->slug }}/edit" class="badge bg-warning text-decoration-none"><span data-feather="edit"></span> Edit</a>
        <form action="/dashboard/posts/{{ $post->slug }}" method="POST" class="d-inline">
          @method('delete')
          @csrf
          <button class="badge bg-danger border-0" onclick="return confirm('Are you sure?')"><span data-feather="x-circle"></span>  Delete</button>
        </form>
        @if ($post->image)
        <img src="{{ asset('storage/' . $post->image) }}" class="card-img-top my-3" alt="{{ $post->category->slug }}">
        @else    
        <img src="/img/{{ $post->category->slug }}-hero.jpg" class="card-img-top my-3" alt="{{ $post->category->slug }}">
        @endif
        <small>Post in <a href="/blog?category={{ $post->category->slug }}" class="text-decoration-none">{{ $post->category->name }}</a> {{ $post->created_at->diffForHumans() }}</small>
        <p>{!! $post->body !!}</p>
      </article>
    </div>
  </div>
</div>
@endsection