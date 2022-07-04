<?php
//connect to the user account class
include("../classes/cart_class.php");

//sanitize data
function cleanText($data) {
  $data = trim($data);
  //$data = stripslashes($data);
  //$data = htmlspecialchars($data);
  return $data;
}



//--INSERT--//
// add to cart
function add_to_cart_ctr($p_id,$ip_add,$c_id,$qty){
    $insert= new cart_class();
    return $insert->add_to_cart_cls($p_id,$ip_add,$c_id,$qty);
}


//--SELECT--//
function view_cart_ctr(){
    $view= new cart_class();
    return $view->view_cart_cls();
}

function evaluate_ctr($p_id){
    $evaluate= new cart_class();
    return $evaluate->evaluate_cls($p_id);
}

function select_total_qty_from_cart_ctr($c_id){
    $qty= new cart_class();
    return $qty->select_total_qty_from_cart_cls($c_id);
}

function select_one_from_cart_ctr($p_id,$c_id){
    $view= new cart_class();
    return $view->select_one_from_cart_cls($p_id,$c_id);
}

// selecting the qty added to a cart by a customer


//--UPDATE--//
function increase_cart_ctr($p_id,$c_id,$qty){
    $view= new cart_class();
    return $view->increase_cart_cls($p_id,$c_id,$qty);
}

function decrease_cart_ctr($p_id,$c_id,$qty){
    $view= new cart_class();
    return $view->decrease_cart_cls($p_id,$c_id,$qty);
}


//--DELETE--//
// remove from cart
function delete_from_cart_ctr($p_id,$c_id){
    $remove= new cart_class();
    return $remove->delete_from_cart_cls($p_id,$c_id);
}


?>