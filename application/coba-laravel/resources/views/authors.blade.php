@extends('layouts.main')

@section('container')
  <div class="container mt-4">
    <h1>Halaman Authors</h1>

    @foreach ($authors as $author)
      <article class="mb-5">
        <h2><a href="/author/{{ $author->username }}">{{ $author->name }}</a></h2>
      </article>
      <hr>
    @endforeach
    
  </div>
@endsection