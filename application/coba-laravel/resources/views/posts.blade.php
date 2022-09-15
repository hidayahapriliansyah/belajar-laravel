@extends('layouts.main')

@section('container')
  {{-- @php
    $titleRequest = 'Post ';
    if(request('category')) {
      $titleRequest .= "in {{ $categories->where('slug', request('category'))->first()->name }}";
    }

    if(request('author')) {
      $titleRequest .= "by {{ $categories->where('slug', request('category'))->first()->name }}";
    }

  @endphp --}}
  <h1 class="my-3 text-center">{{ $title }}</h1>


  {{-- form search --}}
  <div class="row justify-content-center mt-4">
    <div class="col-md-6">
      <form action="/blog">
        @if (request('category'))
          <input type="hidden" name='category' value="{{ request('category') }}">
        @endif
        @if (request('author'))
          <input type="hidden" name='author' value="{{ request('author') }}">
        @endif
        <div class="input-group mb-3">
          <input type="text" class="form-control" placeholder="Search ..." name="search" value="{{ request('search') }}">
          <button class="btn btn-danger" type="submit">Search</button>
        </div>
      </form>
    </div>
  </div>

  @if ($posts->count())
    <div class="container mt-3">
      <div class="card mb-3 text-center">
        <img src="/img/{{ $posts[0]->category->slug }}-hero.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title"><a class="text-decoration-none text-dark" href="/blog/{{ $posts[0]->slug }}">{{ $posts[0]->title }}</a></h5>
          <small>by <a class="text-decoration-none" href="/blog?author={{ $posts[0]->author->username }}">{{ $posts[0]->author->name }}</a> in <a class="text-decoration-none" href="/blog?category={{ $posts[0]->category->slug }}">{{ $posts[0]->category->name }}</a> {{ $posts[0]->created_at->diffForHumans() }}</small>
          <p class="card-text">{{ $posts[0]->excerpt }}</p>
          <a href="/blog/{{ $posts[0]->slug }}" class="btn btn-primary">Read more</a>
        </div>
      </div>

      <div class="row">
        @foreach ($posts->skip(1) as $post)
          <div class="col-md-4 mb-3">
            <div class="card">
              <a href="/blog?category={{ $post->category->slug }}" class="text-decoration-none position-absolute text-white py-2 px-3" style="background-color: rgba(0, 0, 0, 0.7)">{{ $post->category->name }}</a>
              <img src="/img/{{ $post->category->slug }}-post.jpg" class="card-img-top" alt="{{ $post->category->slug }}">
              <div class="card-body">
                <small>by <a href="/blog?author={{ $post->author->username }}" class="text-decoration-none">{{ $post->author->name }}</a> {{ $post->created_at->diffForHumans() }}</small>
                <h5 class="card-title"><a href="/blog/{{ $post->slug }}" class="text-decoration-none">{{ $post->title }} </a></h5>
                <p class="card-text">{{ $post->excerpt }}</p>
                <a href="/blog/{{ $post->slug }}" class="btn btn-primary">Read more</a>
              </div>
            </div>
          </div>
        @endforeach
      </div>
    
      {{-- @foreach ($posts as $post)
        <article class="mb-5">
          <h2><a href="/blog/{{ $post->slug }}" class="text-decoration-none">{{ $post->title }}</a></h2>
          <p>By <a href="/author/{{ $post->author->username }}" class="text-decoration-none">{{ $post->author->name }}</a> in <a href="/categories/{{ $post->category->slug }}" class="text-decoration-none">{{ $post->category->name }}</a></p>
          <p>{{ $post->excerpt }}... <a href="/blog/{{ $post->slug }}" class="text-decoration-none">Read more</a></p>
        </article>
        <hr>
      @endforeach --}}

    </div>
  @else
    <p class="fs-4 text-center fw-bold my-5">No post found</p>
  @endif

  <div class="d-flex justify-content-center">
    {{ $posts->links() }}
  </div>
@endsection