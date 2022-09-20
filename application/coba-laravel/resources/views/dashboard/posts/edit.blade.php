@extends('dashboard.layouts.main')

@section('container')
  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Edit Post</h1>
  </div>

  <div class="col-lg-8">
    <form method="POST" action="/dashboard/posts/{{ $post->slug }}" enctype="multipart/form-data">
      @method('put')
      @csrf
      <div class="mb-3">
        <label for="title" class="form-label">Title</label>
        <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" value="{{ old('title', $post->title) }}" autofocus>
        @error('title')
            <div class="invalid-feedback">
              <p>{{ $message }}</p>
            </div>
        @enderror
      </div>
      <div class="mb-3">
        <label for="slug" class="form-label">Slug</label>
        <input type="text" class="form-control @error('slug') is-invalid @enderror" id="slug" name="slug" value="{{ old('slug', $post->slug) }}" disable readonly>
        @error('slug')
            <div class="invalid-feedback">
              <p>{{ $message }}</p>
            </div>
        @enderror
      </div>
      <div class="mb-3">
        <label for="category" class="form-label">Category</label>
        <select class="form-select" id="category" name="category_id">
          @foreach ($categories as $category)
            @if (old('category_id', $post->category_id) == $category->id)
              <option value="{{ $category->id }}" selected>{{ $category->name }}</option>
            @else
              <option value="{{ $category->id }}">{{ $category->name }}</option>
            @endif
          @endforeach
        </select>
      </div>
      <div class="mb-3">
        <label for="image" class="form-label">Post image </label>
        <input type="hidden" value="{{ $post->image }}" name="oldImage">
        @if ($post->image)
          <img class="img-preview img-fluid col-sm-5 mb-3 d-block" src="{{ asset('storage/' . $post->image) }}" >    
        @else
          <img class="img-preview img-fluid col-sm-5 mb-3">
        @endif
        <input class="form-control @error('image') is-invalid @enderror" onchange="previewImage()" type="file" id="image" name="image">
        @error('image')
            <div class="invalid-feedback">
              <p>{{ $message }}</p>
            </div>
        @enderror
      </div>
      <div class="mb-3">
        <label for="body" class="form-label">Body</label>
        @error('body') <p class="text-danger"> {{ $message }} </p> @enderror
        <input id="body" type="hidden" name="body" value="{{ old('body', $post->body) }}">
        <trix-editor input="body"></trix-editor>
      </div>
      <button type="submit" class="btn btn-primary mb-3">Update post</button>
    </form>
  </div>

  <script>
    const title = document.getElementById('title');
    const slug = document.getElementById('slug');

    title.addEventListener('change', function() {
      fetch('/dashboard/posts/checkSlug?title=' + title.value)
        .then(response => response.json())
        .then(data => slug.value = data.slug)
    });

    document.addEventListener('trix-file-accept', function(e) {
      e.preventDefault;
    });

    function previewImage() {
      const image = document.querySelector('#image');
      const imagePreview = document.querySelector('.img-preview');

      imagePreview.style.display = 'block';

      const oFReader = new FileReader();
      oFReader.readAsDataURL(image.files[0]);

      oFReader.onload = function(oFREvent) {
        imagePreview.src = oFREvent.target.result;
      }
    }
  </script>
@endsection