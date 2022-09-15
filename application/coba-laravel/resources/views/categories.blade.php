@extends('layouts.main')

@section('container')
  <div class="container mt-4">
    <h1 class="mb-5">Halaman Categories</h1>


    <div class="container">
      <div class="row">
        @foreach ($categories as $category)
        <div class="col-md-4">
          <a href="/blog?category={{ $category->slug }}">
            <div class="card bg-dark text-white">
              <img src="/img/{{ $category->slug }}-post.jpg" class="card-img" alt="{{ $category->slug }}">
              <div class="card-img-overlay d-flex align-items-center justify-content-center px-0">
                <h5 class="card-title flex-fill py-3 text-center" style="background-color: rgba(0, 0, 0, 0.7)">{{ $category->name }}</h5>
              </div>
            </div>
          </a>
        </div>
        @endforeach
      </div>
    </div>

    {{-- @foreach ($categories as $category)
      <article class="mb-5">
        <h2><a href="/category/{{ $category->slug }}" class="text-decoration-none">{{ $category->name }}</a></h2>
      </article>
    @endforeach --}}
    
  </div>
@endsection