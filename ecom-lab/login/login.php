<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="../css/index.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	<script src="../js/script.js"></script>
	<title>Login</title>
</head>
<body>
	<form name="loginForm" action="login-process.php" method="post">
	  <div class="container">
	    <h1>Login</h1>
	    <p>Please enter your detials to logn in.</p>
	    <hr>

	    <label for="customer_email"><b>Email</b></label>
	    <input type="text" placeholder="Enter Email" name="customer_email" required>

	    <label for="customer_password"><b>Password</b></label>
	    <input type="password" placeholder="Enter Password" name="customer_password"required>
	    <hr>

	    <button type="submit" value="Login customer" name="login" class="registerbtn">Login</button>
	  </div>

	  <div class="container signin">
	    <p>Don't have an account? <a href="register.php">Register here</a>.</p>
	  </div>
	</form>
</body>
</html>