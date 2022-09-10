@extends('layouts.main')

@section('container')
  <h1>Post Category : {{ $category }}</h1>
  @foreach ($posts as $post)
    <h2>{{ $post->title }}</h2>  
    <p>{{ $post->excerpt }}</p>
  @endforeach
@endsection