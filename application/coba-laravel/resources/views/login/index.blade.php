@extends('layouts.main')

@section('container')
<div class="row justify-content-center">
  <div class="col-md-5">
    <main class="form-signin my-5">
      <form>
        <h1 class="h3 mb-3 fw-normal text-center mb-5">Please log in</h1>

        @if (session()->has('success'))
          <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>  
        @endif
    
          <div class="form-floating my-3">
            <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
            <label for="floatingInput">Email address</label>
          </div>
          <div class="form-floating my-3">
            <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
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