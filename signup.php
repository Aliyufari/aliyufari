<!DOCTYPE html>
<html>
<head>
	<title>aaBlog || Registration Page</title>
	<link rel="stylesheet" type="text/css" href="css/login.css">
</head>
<body>
	<div class="container">
		<h1>Sign Up Here!</h1>
		<form action="" method="POST">
			<input type="text" name="name" class="input-group" placeholder="Full Name">
			<input type="email" name="email" class="input-group" placeholder="Email">
			<input type="text" name="username" class="input-group" placeholder="Username">
			<select name="country" class="input-group cumbo">
				<option>Select Country</option>
				<option>Nigeria</option>
				<option>Niger</option>
				<option>Ghana</option>
				<option>Sudan</option>
			</select>
			<input type="password" name="password" class="input-group" placeholder="Password">
			<button name="login" class="btn">Submit</button>
		</form>
		<p>Already have an account?<a href="login.php"> Sign In</a></p>
	</div>
</body>
</html>