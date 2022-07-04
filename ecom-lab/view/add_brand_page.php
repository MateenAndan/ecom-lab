<?php 
include("../view/navbar.php");
 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="../css/index.css">
	<title>Add Brand</title>
</head>
<body>
	<form action="../functions/add_brand.php" method="post">
	  <div class="container">
	    <h1>Add a Brand</h1>
	    <p>Please fill this to add a brand</p>
	    <hr>
	    <label for="bname"><b>Brand Name</b></label>
	    <input type="text" placeholder="Enter Brand Name" name="bname" required>
	    <hr>

	    <button type="submit" value="Add a Brand" name="add_brand" class="registerbtn">Add Brand</button>
	  </div>
	</form>
</body>
</html>
