<!--  --><!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>TechAsia - login</title>
<link rel="stylesheet" href="./css/bootstrap4_3_1.min.css">
<link rel="stylesheet" type="text/css" href="css/font-awesome/all.css">
<link rel="stylesheet" type="text/css" href="css/style.css">
<link rel="stylesheet" type="text/css" href="css/responsive.css">
</head>
<body>
	<header id="header">
		<div class="container">
			<div class="logo-web">
				<a href="{{ route('web.home')}}"><h1><img src="./images/logo-TechAsia.png"></h1></a>
			</div>
		</div>
	</header>

     <!-- notifili -->

    {!! Session::has('success') ? '
    <div id="alert" class="alert alert-success">
        '.Session::get('success').'
    </div>' : ''!!}
	{!! Session::has('error') ? '
	    <div id="alert" class="alert alert-danger">
	        '.Session::get('error').'
	    </div>' : ''!!}

    <!--  -->
	<main id="wrap-main">
		<div class="container wrapper-login">
			<div class="wrap-form-login">
				<form method="POST" action="{{route('web.login-admin')}}" id="login">
					@csrf
					<div class="form-group">
						<h2>Login to</h2>
					</div>
					<div class="form-group">
						<label>Mail address</label>
						<input class="form-control" type="email" name="email" id="email">
					</div>
					<div class="form-group">
						<label>Password</label>
						<input class="form-control" type="password" name="password" id="password">
					</div>
					<div class="form-group control-button">
						<button type="submit">Login</button>
					</div>
					
				</form>
			</div>
		</div>
	</main>

	<footer id="footer" class="position">
		<div class="container">
			<p>&copy; <span id="fecthYear"></span> Techasiavn |  All Rights Reserved.</p>
		</div>
	</footer>
</body>
<script src="./js/jquery.min.js"></script>
<script src="./js/popper.min.js"></script>
<script src="./js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/main.js"></script>
<script type="text/javascript" src="{{ asset('vendor/jsvalidation/js/jsvalidation.js')}}"></script>

    {!! JsValidator::formRequest('App\Http\Requests\LoginRequest', '#login'); !!}
</html>