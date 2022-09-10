@extends('layouts.main')

@section('container')
    <div class="container">
      <h1>{{ $name }}</h1>
      <h2>{{ $email }}</h2>
      <img src="img/{{ $image }}" alt="{{ $image }}" width="200" class="img-thumbnail rounded-circle">
    </div>
@endsection