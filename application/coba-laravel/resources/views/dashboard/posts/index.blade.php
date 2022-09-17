@extends('dashboard.layouts.main')

@section('container')
  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">My Post</h1>
  </div>
  <div class="col-lg-8">
    <a href="/dashboard/posts/create" class="btn btn-primary mb-3"><span data-feather="plus"></span> Create New Post</a>
    <table class="table table-striped table-sm">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Title</th>
          <th scope="col">Category</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($posts as $post)
        <tr>
          <td>{{ $loop->iteration }}</td>
          <td>
            <span class="d-inline-block text-truncate" style="max-width: 250px;">
              {{ $post->title }}
            </span>
          </td>
          <td>{{ $post->category->name }}</td>
          <td>
            <a href="/dashboard/posts/{{ $post->slug }}" class="badge bg-info" title="Show post"><span data-feather="eye"></span></a>
            <a href="/dashboard/posts/{{ $post->slug }}" class="badge bg-warning" title="Edit post"><span data-feather="edit"></span></a>
            <a href="/dashboard/posts/{{ $post->slug }}" class="badge bg-danger" title="Delete post"><span data-feather="x-circle"></span></a>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
@endsection