<!DOCTYPE html>
<html lang="en">
<head>
	<title>bakery</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="{{ url('theme-assets/logo.png') }}"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ url('vendor/bootstrap/css/bootstrap.min.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ url('fonts/font-awesome-4.7.0/css/font-awesome.min.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ url('vendor/animate/animate.css') }}">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="{{ url('vendor/css-hamburgers/hamburgers.min.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ url('vendor/select2/select2.min.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ url('css/util.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ url('css/main.css') }}">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-pic js-tilt" data-tilt>
					<img src="{{ url('theme-assets/logo.png') }}" alt="IMG">
					<!-- <img src="{{ url('images/img-01.png') }}" alt="IMG"> -->
				</div>

				<form class="login100-form validate-form" action="{{ url('check_login') }}" method="post">
					{{ csrf_field() }}
					<!-- <span class="login100-form-title" style="padding-bottom: 10px;">
						Tumbas.ne
					</span> -->
					<span class="login100-form-title">
						Admin Login
					</span>
					<?php if (Session::has("message")): ?>
						<div class="alert alert-dismissible alert-info col-sm-12">
							{{ Session::get("message") }}
							
						</div>
					<?php endif ?>

					<div class="wrap-input100 validate-input" data-validate = "Username is required">
						<input class="input100" type="text" name="username" id="username" placeholder="Username">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-user" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Password is required"> 
						<input class="input100" type="password" name="password" id="password" placeholder="Password">
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
						<a class="txt2" href="#">
							
							<!-- <i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i> -->
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>
	
	

	
<!--===============================================================================================-->	
	<script src="{{ url('vendor/jquery/jquery-3.2.1.min.js') }}"></script>
<!--===============================================================================================-->
	<script src="{{ url('vendor/bootstrap/js/popper.js') }}"></script>
	<script src="{{ url('vendor/bootstrap/js/bootstrap.min.js') }}"></script>
<!--===============================================================================================-->
	<script src="{{ url('vendor/select2/select2.min.js') }}"></script>
<!--===============================================================================================-->
	<script src="{{ url('vendor/tilt/tilt.jquery.min.js') }}"></script>
	<script >
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>
<!--===============================================================================================-->
	<script src="{{ url('js/main.js') }}"></script>

</body>
</html>