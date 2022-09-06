@extends('layouts.main')

@section('container')
  <article class="mt-4">
    <h2>{{ $post["title"] }}</h2>
    <h4>{{ $post["author"] }}</h4>
    <p>{{ $post["body"] }}</p>
  </article>
@endsection