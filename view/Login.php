<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="./Style/LoginStyle.css">
	<title>Login&Sign Up Page</title>
</head>

<body>
	<?php include "Header.php"; ?>

	<br><br>

	<center>
		<div class="container" id="container">
			<div class="form-container sign-up-container">
				<form action="Register.php" method="post">
					<h1>Create Account</h1>
					<span>or use your email for registration</span>
					<input type="text" name="user" placeholder="Name" />
					<input type="email" name="email" placeholder="Email" />
					<input type="password" name="password" placeholder="Password" />
					<br>
					<button>Sign Up</button>
				</form>
			</div>
			<div class="form-container sign-in-container">
				<form action="Validation.php" method="post">
					<h1>Login</h1>
					<span>or use your account</span>
					<input type="email" name="email" placeholder="Email" />
					<input type="password" name="password" placeholder="Password" />
					<br>
					<a href="#">Forgot your password?</a>
					<br>
					<button>Login</button>
				</form>
			</div>
			<div class="overlay-container">
				<div class="overlay">
					<div class="overlay-panel overlay-left">
						<h1>Welcome Back!</h1>
						<p>To keep connected with us please login with your personal info</p>
						<button class="ghost" id="signIn">Login</button>
					</div>
					<div class="overlay-panel overlay-right">
						<h1>Hello, Friend!</h1>
						<p>Enter your personal details and start journey with us</p>
						<button class="ghost" id="signUp">Sign Up</button>
					</div>
				</div>
			</div>
		</div>
	</center>

	<script>
		const signUpButton = document.getElementById('signUp');
		const signInButton = document.getElementById('signIn');
		const container = document.getElementById('container');

		signUpButton.addEventListener('click', () => {
			container.classList.add("right-panel-active");
		});

		signInButton.addEventListener('click', () => {
			container.classList.remove("right-panel-active");
		});
	</script>

	<br><br><br>

	<?php include "Footer.php"; ?>

</body>

</html>