<!DOCTYPE html>
<html>
<head>
	<title>aaBlog || Registration Page</title>
	<link rel="stylesheet" type="text/css" href="css/login.css">
	<link rel="stylesheet" type="text/css" href="fontawesome/css/all.css">
</head>
<body>
	<div class="wrapper">
		<div class="container">
			<span class="form-heading">Sign Up</span>
			<form action="includes/process.php" method="POST" class="form-box">
				<div class="input-group">
					<i class="fas fa-user"></i>
					<input type="text" name="user-name" autocomplete="off" placeholder="Username">
					<span class="bar"></span>
				</div>
				<div class="input-group">
					<i class="fas fa-envelope"></i>
					<input type="email" name="user-email" autocomplete="off" placeholder="Email">
					<span class="bar"></span>
				</div>
				<div class="input-group">
					<i class="fas fa-globe"></i>
					<select name="country">
						<option disabled="disabled">Select Country</option>
						<option>Nigeria</option>
						<option>Niger</option>
						<option>India</option>
						<option>China</option>
						<option>USA</option>
					</select>
					<span class="bar"></span>
				</div>
				<div class="input-group">
					<i class="fas fa-users"></i>
					<select name="gender">
						<option disabled="disabled">Select Gender</option>
						<option>Male</option>
						<option>Female</option>
						<option>Other</option>
					</select>
					<span class="bar"></span>
				</div>
				<div class="input-group">
					<i class="fas fa-lock"></i>
					<input type="password" name="user-password" autocomplete="off" placeholder="Password">
					<span class="bar"></span>
				</div>
				<div class="input-group">
					<i class="fas fa-lock"></i>
					<input type="password" name="user-password2" autocomplete="off" placeholder="Comfirm Password">
					<span class="bar"></span>
				</div>
				<div class="input-group">
					<button name="signup" class="btn">
						<i class="fab fa-telegram-plane"></i>
					</button>
				</div>
				<div class="switch-user">
					<p>Already have an account?<a href="login.php"> Sign In</a></p>
				</div>
			</form>
		</div>
	</div>
</body>
</html>
