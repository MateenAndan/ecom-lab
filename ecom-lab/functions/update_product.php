<?php
//connect the controller
require("../controllers/product_controller.php");

//check for 
if (isset($_POST['update_product'])){
	//register user
	//grab from data
	$target= "../images/".basename($_FILES['pimage']['name']);
	$pidd = ($_POST['pidd']);
	$pbrand = ($_POST['pbrand']);
	$pcat = ($_POST['pcat']);
	$ptitle = ($_POST['ptitle']);
	$pprice = ($_POST['pprice']);
	$pdesc = ($_POST['pdesc']);
	$pimage = ($_FILES['pimage']['name']);
	$pkey = ($_POST['pkey']);

	

	//call a controller
	$check = update_product_ctr($pidd,$pbrand,$pcat,$ptitle,$pprice,$pdesc,$pimage,$pkey);

	if ($check){
		header("location:../admin/product.php");

		if (move_uploaded_file($_FILES['pimage']['tmp_name'], $target)) {
			echo "success";
        # code...
		}

		else {
			echo "fail";
		}
		header("location:../admin/product.php");
	} 

	else {
		echo "Insert failed";
	}
}


?>