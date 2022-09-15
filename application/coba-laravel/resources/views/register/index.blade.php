@extends('layouts.main')

@section('container')
<div class="row justify-content-center">
  <div class="col-md-5">
    <main class="form-signin my-5">
      <form action="/register" method="POST">
        @csrf
        <h1 class="h3 mb-3 fw-normal text-center mb-5">Registration Form</h1>
  
        <div class="form-floating my-3">
          <input type="text" class="form-control @error('name') is-invalid @enderror" id="floatingInput" placeholder="name@example.com" name="name" value="{{ old('name') }}" autofocus>
          <label for="floatingInput">Name</label>
          @error('name')
            <div id="validationServerUsernameFeedback" class="invalid-feedback">
              {{ $message }}
            </div>
          @enderror
        </div>
        <div class="form-floating my-3">
          <input type="text" class="form-control @error('username') is-invalid @enderror" id="floatingInput" placeholder="name@example.com" name="username" value="{{ old('username') }}">
          <label for="floatingInput">Username</label>
          @error('username')
            <div id="validationServerUsernameFeedback" class="invalid-feedback">
              {{ $message }}
            </div>
          @enderror
        </div>
        <div class="form-floating my-3">
          <input type="email" class="form-control @error('email') is-invalid @enderror" id="floatingInput" placeholder="name@example.com" name="email" value="{{ old('email') }}">
          <label for="floatingInput">Email address</label>
          @error('email')
            <div id="validationServerUsernameFeedback" class="invalid-feedback">
              {{ $message }}
            </div>
          @enderror
        </div>
        <div class="form-floating my-3">
          <input type="password" class="form-control @error('password') is-invalid @enderror" id="floatingPassword" placeholder="Password" name="password">
          <label for="floatingPassword">Password</label>
          @error('password')
            <div id="validationServerUsernameFeedback" class="invalid-feedback">
              {{ $message }}
            </div>
          @enderror
        </div>

        <button class="w-100 btn btn-lg btn-danger" type="submit">Register</button>
      </form>
      <small class="text-center d-block mt-3">Already registered? <a href="/login">Login</a></small>
      <p class="mt-4 mb-3 text-muted text-center">&copy; 2017–2021</p>
    </main>
  </div>
</div>
@endsection