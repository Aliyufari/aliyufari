<!DOCTYPE html>
<html>
<head>
	<title>aaBlog || Login Page</title>
	<link rel="stylesheet" type="text/css" href="css/login.css">
	<link rel="stylesheet" type="text/css" href="fontawesome/css/all.css">
</head>
<body>
	<div class="wrapper">
		<div class="container">
			<span class="form-heading">Sign In</span>
			<form action="classes/User.class.php" method="POST" class="form-box">
				<div class="input-group">
					<i class="fas fa-user"></i>
					<input type="text" name="user-name" autocomplete="off" placeholder="Email">
					<span class="bar"></span>
				</div>
				<div class="input-group">
					<i class="fas fa-lock"></i>
					<input type="password" name="user-password" autocomplete="off" placeholder="Password">
					<span class="bar"></span>
				</div>
				<div class="forgot-password">
					<p>Forgot Password?<a href="#"> Click here</a></p>
				</div>
				<div class="input-group">
					<button name="login" class="btn">
						<i class="fab fa-telegram-plane"></i>
					</button>
				</div>
				<div class="switch-user">
					<p>Don't have an account?<a href="signup.php"> Sign Up</a></p>
				</div>
			</form>
		</div>
	</div>
</body>
</html>