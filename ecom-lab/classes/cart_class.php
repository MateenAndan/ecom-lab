<?php
//connect to database class
require("../settings/db_class.php");

class cart_class extends db_connection{
	//--INSERT--//
	//add to cart
	function add_to_cart_cls($p_id,$ip_add,$c_id,$qty){
		$sql = "INSERT INTO cart (p_id,ip_add,c_id,qty) VALUES ('$p_id','$ip_add','$c_id','$qty')";
		return $this-> db_query($sql);
	}

	//--SELECT--//
	function view_cart_cls(){
		$sql = "select products.product_id, products.product_title,products.product_price, products.product_image, products.product_price, cart.qty, cart.c_id from cart inner join products on cart.p_id=products.product_id;";
		return $this-> db_fetch_all($sql);
	}

	function evaluate_cls($p_id){
        $sql = "SELECT * FROM cart WHERE p_id='$p_id' ";
        $result=$this-> db_fetch_all($sql);
    }

    function select_total_qty_from_cart_cls($c_id){
        $sql = "SELECT SUM(qty) FROM cart WHERE c_id=$c_id";
        return $this-> db_fetch_all($sql);
    }

     // one item  from cart
    function select_one_from_cart_cls($p_id,$c_id){
        $query= "select qty from cart where p_id=$p_id and c_id=$c_id";
        return $this-> db_fetch_one($query);
    }


    // selecting the number of items a customer has bought

    // selecting the total price of a single item a customer has bought
    function select_one_price_cls($c_id){
        $query= "SELECT products.SUM(product_price) FROM cart WHERE cart inner join products on cart.p_id=products.product_id and cart.c_id=$c_id";
        return $this-> db_fetch_all($query);   
    }


	//--UPDATE--//
	function increase_cart_cls($p_id,$c_id,$qty){
		$sql = "UPDATE cart SET qty='$qty'+1 WHERE p_id='$p_id' and c_id='$c_id'";
		return $this-> db_query($sql); 
	}

	function decrease_cart_cls($p_id,$c_id,$qty){
		$sql = "UPDATE cart SET qty='$qty'-1 WHERE p_id='$p_id' and c_id='$c_id'";
		return $this-> db_query($sql);
	}
	//--DELETE--//
	function delete_from_cart_cls($p_id,$c_id){
		$sql = "DELETE FROM cart WHERE p_id='$p_id' and c_id='$c_id'";
		return $this-> db_query($sql);
	}

}
?>