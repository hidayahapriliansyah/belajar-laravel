@extends('layouts.main')

@section('container')
  <div class="container mt-4">
    <h1>Halaman Categories</h1>

    @foreach ($categories as $category)
      <article class="mb-5">
        <h2><a href="/category/{{ $category->slug }}">{{ $category->name }}</a></h2>
      </article>
    @endforeach
    
  </div>
@endsection