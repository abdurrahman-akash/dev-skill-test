<!doctype html>
<html lang="en">
  <head>
  	<title>Test</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

	<style>
		@import url('https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900');
		*
		{
			margin: 0;
			padding: 0;
			box-sizing: border-box;
			font-family: 'Poppins', sans-serif;
		}
		html {
			font-family: sans-serif;
			line-height: 1.15;
			-webkit-text-size-adjust: 100%;
			-ms-text-size-adjust: 100%;
			-ms-overflow-style: scrollbar;
			-webkit-tap-highlight-color: rgba(0, 0, 0, 0);
		}
		body {
			margin: 0;
			font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
			font-size: 1rem;
			font-weight: 400;
			line-height: 1.5;
			color: #212529;
			text-align: left;
			background-color: #fff;
		}

		.ftco-section {
			padding: 7em 0;
		}

		.container {
		display: flex;
		justify-content: center;
		align-items: center;
		height: 100%;
		width: 100%;
}

		.row {
			display: -webkit-box;
			display: -ms-flexbox;
			display: flex;
			-ms-flex-wrap: wrap;
			flex-wrap: wrap;
			margin-right: -15px;
			margin-left: -15px;
		}

		justify-content-center {
			-webkit-box-pack: center !important;
			-ms-flex-pack: center !important;
			justify-content: center !important;
		}

		.col-md-7 {
			position: relative;
			width: 100%;
			min-height: 1px;
			padding-right: 15px;
			padding-left: 15px;
		}

		.col-md-5 {
			position: relative;
			width: 100%;
			min-height: 1px;
			padding-right: 15px;
			padding-left: 15px;
		}

		.img {
			background-size: cover;
			background-repeat: no-repeat;
			background-position: center center;
		}

		.wrap {
			width: 100%;
			overflow: hidden;
			background: #fff;
			border-radius: 5px;
			-webkit-box-shadow: 0px 10px 34px -15px rgba(0, 0, 0, 0.24);
			-moz-box-shadow: 0px 10px 34px -15px rgba(0, 0, 0, 0.24);
			box-shadow: 0px 10px 34px -15px rgba(0, 0, 0, 0.24);
		}

		.wrap .img {
			height: 200px;
            background-image: url({{ asset('public/img/bg-1.jpg') }});
		}

		.login-wrap {
			position: relative;
			padding: 3em;
		}

		.login-wrap h3 {
			font-weight: 300;
		}

		.social-media {
			margin-top: 20px;
		}

		.social-icon {
			width: 40px;
			height: 40px;
			background: transparent;
			border: 1px solid rgba(0,0,0,0.05);
			font-size: 16px;
			margin-right: 5px;
			border-radius: 50%;
		}

		.social-icon span {
			color: #999999;
		}

		.social-icon:hover {
			background: #000;
		}

		.social-icon:hover span {
			color: #fff;
		}

		.form-control {
			position: relative;
			font-size: 16px;
			height: auto;
			padding: 10px;
			-webkit-box-sizing: border-box;
			-moz-box-sizing: border-box;
			box-sizing: border-box;
			background: #fff;
			border: 1px solid #fff;
			border-radius: 0px;
			color: #000;
		}

		.form-control:focus {
			border: 1px solid #fff;
		}

		.submit {
			background: #01d28e;
			border: 1px solid transparent;
			color: #fff;
			-webkit-border-radius: 0px;
			-moz-border-radius: 0px;
			-ms-border-radius: 0px;
			border-radius: 0px;
		}

		.submit:hover {
			background: #fff;
			border: 1px solid #01d28e;
			color: #01d28e;
		}

		.form-control::-webkit-input-placeholder {
			color: #fff;
		}
		.form-control:-ms-input-placeholder {
			color: #fff;
		}
		.form-control::-ms-input-placeholder {
			color: #fff;
		}
		.form-control::placeholder {
			color: #fff;
		}

		.form-control::-webkit-input-placeholder { /* Chrome/Opera/Safari */
			color: #fff;
		}
		.form-control::-moz-placeholder { /* Firefox 19+ */
			color: #fff;
		}
		.form-control:-ms-input-placeholder { /* IE 10+ */
			color: #fff;
		}
		.form-control:-moz-placeholder { /* Firefox 18- */
			color: #fff;
		}

		.field-icon {
			position: absolute;
			top: 50%;
			right: 15px;
			-webkit-transform: translateY(-50%);
			-moz-transform: translateY(-50%);
			-ms-transform: translateY(-50%);
			transform: translateY(-50%);
			color: #fff;
		}

		.toggle-password {
			position: absolute;
			top: 50%;
			right: 15px;
			-webkit-transform: translateY(-50%);
			-moz-transform: translateY(-50%);
			-ms-transform: translateY(-50%);
			transform: translateY(-50%);
			color: #fff;
		}

		.toggle-password:hover {
			cursor: pointer;
		}

		.signin-form {
			position: relative;
		}

		.form-group {
			position: relative;
			margin-bottom: 25px;
		}

		.form-group:last-child {
			margin-bottom: 0px;
		}

		.form-group .btn {
			width: 100%;
		}

		.form-group .btn:hover {
			background: #000;
		}

		.form-control-placeholder {
			position: absolute;
			top: 0px;
			left: 0px;
			padding: 7px 0 0 10px;
			transition: all 0.25s ease-in-out;
			-webkit-transition: all 0.25s ease-in-out;
			-moz-transition: all 0.25s ease-in-out;
			-ms-transition: all 0.25s ease-in-out;
		}

		.form-control:focus + .form-control-placeholder,
		.form-control:valid + .form-control-placeholder {
			font-size: 80%;
			-webkit-transform: translate3d(0, -100%, 0);
			-moz-transform: translate3d(0, -100%, 0);
			-ms-transform: translate3d(0, -100%, 0);
			transform: translate3d(0, -100%, 0);
		}

		.form-control:focus + .form-control-placeholder {
			color: #01d28e;
		}

		.checkbox-wrap {
			position: relative;
			padding-left: 30px;
			cursor: pointer;
			font-size: 16px;
			color: #000;
		}

		.checkbox-wrap input {
			position: absolute;
			top: 0;
			left: 0;
			margin: 0;
		}

		.checkbox-wrap label {
			position: relative;
			display: block;
			padding-left: 10px;
		}

		.checkbox-wrap label:before {
			content: "";
			position: absolute;
			top: 50%;
			left: 0;
			width: 20px;
			height: 20px;
			-webkit-transform: translateY(-50%);
			-ms-transform: translateY(-50%);
			transform: translateY(-50%);
			border: 1px solid #ccc;
			background: #fff;
		}

		.checkbox-wrap label:after {
			content: "";
			position: absolute;
			top: 50%;
			left: 0;
			width: 20px;
			height: 20px;
			-webkit-transform: translateY(-50%);
			-ms-transform: translateY(-50%);
			transform: translateY(-50%);
			border: 1px solid #ccc;
			background: #fff;
		}

		.checkbox-wrap input:checked + label:after {
			content: "";
			position: absolute;
			top: 50%;
			left: 0;
			width: 20px;
			height: 20px;
			-webkit-transform: translateY(-50%);
			-ms-transform: translateY(-50%);
			transform: translateY(-50%);
			background: #01d28e;
		}

		.field-icon {
			position: absolute;
			top: 50%;
			right: 15px;
			-webkit-transform: translateY(-50%);
			-ms-transform: translateY(-50%);
			transform: translateY(-50%);
			color: #000;
		}




	</style>

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

	</body>
</html>

