<?php

//connect the controller
require("../controllers/customer_controller.php");

//check for 
if (isset($_POST['login'])){
	//register user
	//grab from data
	$customer_email = ($_POST['customer_email']);
	$customer_password = ($_POST['customer_password']);
	

	//call a controller
	$check = select_customer_ctr($customer_email, $customer_password);

	// echo($check);
	// print_r($check);
	if ($check){
		// set session for id and user role 
		session_start();
		$_SESSION['cid'] = $check['customer_id'];
		$_SESSION['role'] = $check['user_role'];
		header('location:../view/homepage.php');
	}

	else {
		echo "Login failed";
	}
}



?>