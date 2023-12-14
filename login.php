<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>All Access - Powered by Mediabase</title>
	<link type="text/css" rel="stylesheet" href="assets/styles/vendor/bootstrap.min.css" />
	<link type="text/css" rel="stylesheet" href="style.css" />
</head>

<body class="login">
	
<?php include 'includes/header.php'; ?>


<div class="site-inner">
	<!-- ad banner -->
	<div class="aa-ad-banner">
		<div class="container">
			<div class="row">
				<div class="col-12 d-flex justify-content-center">
					<img src="assets/images/TrueIntegration_728x90_2.png" width="728" alt="TrueIntegration_728x90_2" />
				</div>
			</div>
		</div>
	</div>
	
	
	<main class="content">
		<!-- header -->
		<div class="container">
			<div class="row">
				<div class="col-12">
					<header class="entry-header">
						<h1 class="entry-title text-center">Members Log-In</h1>
					</header>
				</div>
			</div>
		</div>
		
		<!-- login form -->
		<div class="login-form">
			<div class="container">
				<div class="row">
					<div class="col-12 col-md-6 offset-md-3">
						
						<form class="form form-login">
							<div class="col-12">
								<label class="form-label" for="username">Username</label>
								<input type="text" name="username" class="form-control" id="username" required />
							</div>
							
							<div class="col-12">
								<label class="form-label" for="password">Password</label>
								<input type="password" name="password" class="form-control" id="password" required />
							</div>
							
							<div class="col-12">
								<div class="form-check">
									<input type="checkbox" name="remember-me" class="form-check-input" id="remember-me" />
									<label class="form-check-label" for="remember-me">Remember Me</label>
								</div>
							</div>
							
							<input type="submit" class="btn btn-primary" value="Log In"></input>
						</form>
						
						<div class="alert alert-primary text-center">
							<h5>Not a Member Yet?</h5>
							<p /><a class="btn btn-primary" href="register.php">Sign Up Now</a>
						</div>
						
					</div>
				</div>
			</div>
		</div>
	</main>
</div>


<?php
include 'includes/footer.php';
include 'includes/offcanvas-navigation.php';
?>


<!-- JQUERY FILES -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script src="assets/scripts/min/fontawesome.min.js"></script>
<script src="assets/scripts/min/bootstrap.bundle.min.js"></script>
<script src="assets/scripts/min/global.js"></script>

</body>
</html>