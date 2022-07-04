<?php
// include("../settings/core.php");
// check_login();
include("../view/navbar.php");
include("../functions/product_functions.php");

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
    <!-- <script src="../js/delete.js"></script> -->
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous"> -->

    <title>View Product</title>
  </head>
  <body>
    <div id = "flex-container">
     <div style=' margin: auto; min-height: 400px; min-width: 1100px; ' >
       <h5><?php echo $product_title; ?> </h5>
          <div class='row row-cols-1 row-cols-md-2 g-4' style='margin-top: 30px; margin-left: 40px;'>
              <div class='col' style='height: 1000px; '>
                  <div class='card'>
                  <img src='../images/<?php echo $product_image; ?>' class='card-img-top' style='height: 500px; ' >
                  <div class='card-body' style='font-size:20px; '>
                      Name: <?php echo $product_title; ?> <br>
                      Price:  GHS <?php echo $product_price; ?><br>
                      Category:  <?php echo $cname['cat_name']; ?> <br>
                      Brand: <?php echo $bname['brand_name']; ?> <br>
                      Description:  <?php echo $product_desc; ?> <br>
                      Keywords:  <?php echo $product_keywords; ?> <br>
                       <br> 
                      <a class="btn btn-primary">Add to Cart</a>
                  </div>
                  </div>
              </div>  
          </div>
      </div>
    </div>
  </body>
</html>
<style>
    #flex-container {
      display: flex;
    }

    #flex-child {
      flex: 1;
      border: 2px ;
    }  

    #flex-child:first-child {
      margin-right: 20px;
    }
  </style>