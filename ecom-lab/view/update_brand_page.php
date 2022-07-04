<?php 
include"../controllers/product_controller.php";
include("../view/navbar.php");
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="../css/index.css">
  <title>Update Brand</title>
</head>
<body>
  <?php 
  $get_id = $_GET['bid']; 

  $one_brand = get_one_brand_ctr($get_id);
          // print_r($one_brand);
  ?>
  <form action="../functions/update_brand.php" method="post">
    <div class="container">
      <h1>Update a Brand</h1>
      <p>Please fill this to update a brand</p>
      <hr>
      <label for="bidd"><b>Brand Id</b></label>
      <input  value = "<?php echo $one_brand['brand_id']; ?>" type="hidden" name="bidd" >

      <input  value = "<?php echo $one_brand['brand_name']; ?>" type="text" placeholder="Enter New Brand Name" name="bnamee" required>
      <hr>

      <button type="submit" value="Update a brand" name="update_brand" class="registerbtn">Update Brand</button>
    </div>
  </form>
</body>
</html>
