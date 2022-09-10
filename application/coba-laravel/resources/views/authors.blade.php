@extends('layouts.main')

@section('container')
  <div class="container mt-4">
    <h1>Halaman Authors</h1>

    @foreach ($authors as $author)
      <article class="mb-5">
        <h2><a href="/author/{{ $author->id }}">{{ $author->name }}</a></h2>
      </article>
    @endforeach
    
  </div>
@endsection