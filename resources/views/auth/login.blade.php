<!doctype html>
<html lang="en">
  <head>
  	<title>Test</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

	</head>
	<body>
        <section class="ftco-section">
            <div class="container">
              <div class="row justify-content-center">
                <div class="col-md-7 col-lg-5">
                  <div class="wrap">
					<div class="img" style="background-image: url('{{ asset('img/bg-1.jpg') }}');"></div>
                    <div class="login-wrap p-4 p-md-5">
                      <div class="d-flex">
                        <div class="w-100">
                          <h3 class="mb-4">Sign In</h3>
                        </div>
                        <div class="w-100">
                          <p class="social-media d-flex justify-content-end">
                            <a href="#" class="social-icon d-flex align-items-center justify-content-center"><span class="fa fa-facebook"></span></a>
                            <a href="#" class="social-icon d-flex align-items-center justify-content-center"><span class="fa fa-twitter"></span></a>
                          </p>
                        </div>
                      </div>
                      <!-- Login Form -->
                      <form action="{{ route('login') }}" method="POST" class="signin-form">
                        @csrf
                        <!-- Username/Email -->
                        <div class="form-group mt-3">
                          <input id="email" type="email" name="email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}" required autofocus>
                          <label class="form-control-placeholder" for="email">Email Address</label>
                          @error('email')
                          <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                          </span>
                          @enderror
                        </div>
                        <!-- Password -->
                        <div class="form-group">
                          <input id="password-field" type="password" name="password" class="form-control @error('password') is-invalid @enderror" required>
                          <label class="form-control-placeholder" for="password">Password</label>
                          <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
                          @error('password')
                          <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                          </span>
                          @enderror
                        </div>
                        <!-- Remember Me -->
                        <div class="form-group d-md-flex">
                          <div class="w-50 text-left">
                            <label class="checkbox-wrap checkbox-primary mb-0">Remember Me
                              <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}>
                              <span class="checkmark"></span>
                            </label>
                          </div>
                          <div class="w-50 text-md-right">
                            @if (Route::has('password.request'))
                            <a href="{{ route('password.request') }}">Forgot Password?</a>
                            @endif
                          </div>
                        </div>
                        <!-- Submit Button -->
                        <div class="form-group">
                          <button type="submit" class="form-control btn btn-primary rounded submit px-3">Sign In</button>
                        </div>
                      </form>
                      <!-- Signup Link -->
                      <p class="text-center">Not a member? <a data-toggle="tab" href="#signup">Sign Up</a></p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>

          <script src="{{ asset('js/jquery.min.js') }}"></script>
          <script src="{{ asset('js/popper.js') }}"></script>
          <script src="{{ asset('js/bootstrap.min.js') }}"></script>
          <script src="{{ asset('js/main.js') }}"></script>

	</body>
</html>

