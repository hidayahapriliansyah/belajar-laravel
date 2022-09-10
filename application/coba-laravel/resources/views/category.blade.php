@extends('layouts.main')

@section('container')
  <h1>Post Category : {{ $category }}</h1>
  <h2>{{ $posts->title }}</h2>
@endsection