<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===	============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>

    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="assets/login-form/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="assets/login-form/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="assets/login-form/vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="assets/login-form/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="assets/login-form/vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="assets/login-form/css/util.css">
	<link rel="stylesheet" type="text/css" href="assets/login-form/css/main.css">
    <link rel="shortcut icon" href="assets/login-form/images/boold.png" type="img/x-icon" />
<!--===============================================================================================-->
</head>
<body>
    <div class="limiter">
        <div class="container-login100">
		   <div class="wrap-login100">
				@if (session('loginError'))
				    <div class="container w-75">
					   <div class="alert alert-danger alert-dismissible fade show" role="alert">
						  {{ session ('loginError') }}
						  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						 </button>
					   </div>
				    </div>
				@endif

				<div class="login100-pic js-tilt" data-tilt>
					<img src="assets/login-form/images/boold.png" alt="IMG">
				</div>
				<form class="login100-form validate-form" action="{{ route('auth') }}" method="POST">
					@csrf 
					<span class="login100-form-title">
						Login 
					</span>

					<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
						<input class="input100 @error('email') is-invalid @enderror" type="email" name="email" placeholder="Your Email">
						@error('email')
                                  <div class="text-danger">{{ $message }}</div>
                              @enderror
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Password is required">
						<input class="input100 @error(' password') is-invalid @enderror" type="password" name="password" placeholder="Your Password">
						@error('password')
                                  <div class="text-danger">{{ $message }}</div>
                              @enderror
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
					</div>
					
					<div class="container-login100-form-btn">
						<button class="login100-form-btn">
							Login
						</button>
					</div>

					<div class="text-center p-t-136">
						<a class="txt2" href="/">
							<i class="fa fa-long-arrow-left m-l-5" aria-hidden="true"></i>
							Cancel
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>
	
	

	
<!--===============================================================================================-->	
	<script src="assets/login-form/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="assets/login-form/vendor/bootstrap/js/popper.js"></script>
	<script src="assets/login-form/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="assets/login-form/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="assets/login-form/vendor/tilt/tilt.jquery.min.js"></script>
	<script >
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>
<!--===============================================================================================-->
	<script src="assets/login-form/s/main.js"></script>

</body>
</html>