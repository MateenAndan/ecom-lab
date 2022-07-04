<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="../css/index.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	<script src="../js/email-validation.js"></script>
	<title>Register</title>
</head>
<body onload='document.register_customer.customer_email.focus()'>
	<form name = "register_customer" action="register-process.php" method="post">
	  <div class="container">
	    <h1>Register</h1>
	    <p>Please fill in this form to create an account.</p>
	    <hr>

	    <label for="customer_name"><b>Fullname</b></label>
	    <input type="text" placeholder="Enter Fullname" name="customer_name" required>

	    <label for="customer_email"><b>Email</b></label>
	    <input type="text" placeholder="Enter Email" name="customer_email" required>

	    <label for="customer_password"><b>Password</b></label>
	    <input type="password" placeholder="Enter Password" name="customer_password"required> 

	    <label for="customer_country"><b>Country</b></label>
	    <input type="text" placeholder="Enter Country" name="customer_country"required>

	    <label for="customer_city"><b>City</b></label>
	    <input type="text" placeholder="Enter City" name="customer_city" required>

	    <label for="customer_contact"><b>Contact</b></label>
	    <input type="text" placeholder="Enter Phone Number" name="customer_contact"required>

	    <label class="image" for="customer_image">Select an Image</label>
	    <input type="file" name="customer_image" class="image">

	    <hr>

	    <button type="submit" value="Register new customer" name="regis" class="registerbtn" onclick="ValidateEmail(document.register_customer.customer_email)">Register</button>
	  </div>

	  <div class="container signin">
	    <p>Already have an account? <a href="login.php">Login</a>.</p>
	  </div>
	</form>
</body>
</html>
