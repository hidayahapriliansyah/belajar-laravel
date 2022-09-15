@extends('layouts.main')

@section('container')
<div class="row justify-content-center">
  <div class="col-md-5">
    <main class="form-signin my-5">
      <h1 class="h3 mb-3 fw-normal text-center mb-5">Please log in</h1>

        @if (session()->has('success'))
          <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>  
        @endif

        @if (session()->has('loginError'))
          <div class="alert alert-danger alert-dismissible fade show" role="alert">
            {{ session('loginError') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>  
        @endif

      <form action="/login" method="POST">
          @csrf
          <div class="form-floating my-3">
            <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="name@example.com" name="email" autofocus>
            <label for="email">Email address</label>
            @error('email')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
            @enderror
          </div>
          <div class="form-floating my-3">
            <input type="password" class="form-control @error('password') is-invalid @enderror" id="floatingPassword" placeholder="Password" name="password">
            <label for="floatingPassword">Password</label>
          </div>
          <button class="w-100 btn btn-lg btn-danger" type="submit">Login</button>
        </form>
        <small class="text-center d-block mt-3">Not registered? <a href="/register">Register now!</a></small>
        <p class="mt-4 mb-3 text-muted text-center">&copy; 2017–2021</p>
      </main>
    </div>
  </div>
@endsection