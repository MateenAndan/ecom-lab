<?php
//connect to database class
require("../settings/db_class.php");

class customer_class extends db_connection{
	//--INSERT--//
	//register customer
	function customer_register_cls($a,$b, $c, $d, $e, $f, $g, $h){
		$customer_password = md5($c);
		$sql = "INSERT INTO customer(customer_name,customer_email,customer_pass,customer_country,customer_city,customer_contact,customer_image,user_role) VALUES ('$a','$b','$customer_password','$d','$e','$f','$g','$h')";
		return $this-> db_query($sql);
	}

	//--SELECT--//
	//login customer 
	function customer_login_cls($b,$c){
		$customer_password = md5($c);
		$sql = "SELECT * FROM customer WHERE customer_email ='$b' AND customer_pass = '$customer_password'";
		return $this->db_fetch_one($sql);		
	}
	

	//--UPDATE--//



	//--DELETE--//
	


}
?>