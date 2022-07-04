<?php
// include("../settings/core.php");
include("../controllers/product_controller.php");
// check_login();
include("../view/navbar.php");
if (isset($_POST['submit22'])) {
  $find= $_POST['find'];
  $productlist=search_product_ctr($find);
}
// $adminn = check_admin();
// if ($adminn == 1) {
//  // code...
// }else{
//  echo "no access";
// }
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Search Products Results</title>
</head>
<body>
  <h4>Search results for ' <?php echo  $find ; ?> '</h4>
  <div class="container">
    <div class='row row-cols-1 row-cols-md-3 g-4' >
      <?php
      foreach ($productlist as $aproduct) {
        $product_id = $aproduct['product_id'];
        $product_title = $aproduct['product_title'];
        $product_price = $aproduct['product_price'];
        $product_image = $aproduct['product_image'];
        
        echo "
        
        <div class='card-columns'>
        
        <div class='card ' style='box-shadow: 5px 10px 8px #888888; width: 300px; margin-top: 40px;margin-left: 30px;'>
        <img src=' ../images/$product_image' class='card-img-top' style='height: 200px; ' >
        <div class='card-body style='font-size:20px;' >
        Name: $product_title <br>
        Price:  GHS $product_price <br> <br> 
        <a href='../functions/add_to_cart.php?pid=$product_id' class='btn btn-primary'>Add to Cart</a>
        <a href='single_product.php?vid=$product_id' class='btn btn-primary'>View</a>
        </div>
        </div>
        
        </div>
        
        ";
      }
      ?>
    </div>
  </div>
  
</body>
</html>
