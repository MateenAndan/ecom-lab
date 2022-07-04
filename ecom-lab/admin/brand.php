<?php
// include("../settings/core.php");
include("../controllers/product_controller.php");
// check_login();
include("../view/navbar.php");

// $adminn = check_admin();
// if ($adminn == 1) {
// 	// code...
// }else{
// 	echo "no access";
// }
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- <script src="../js/delete.js"></script> -->
	<!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous"> -->

	<title>Brands</title>
</head>
<body>
	<div class="table-responsive">
		<h1>List of Brands</h1>
		<a class= "btn btn-success" href="../view/add_brand_page.php" role="button">New Brand</a>
		<br>
		<table class="table" style="width: 450px;">
			<thead>
				<tr>
					<th>ID</th>
					<th>Brands</th>
					<th>Actions</th>
				</tr>
			</thead>

			<tbody>
				<?php
				$brand_list = get_all_brand_ctr();
				foreach ($brand_list as $abrand) {
					// code...
					$bid = $abrand['brand_id'];
					$bname = $abrand['brand_name'];
					echo"
					<tr>
					<td>$bid</td>
					<td>$bname</td>
					<td>
					<a class ='btn btn-primary btn-sm' href='../view/update_brand_page.php?bid=$bid'>Update</a>
					<a class = 'btn btn-danger btn-sm remove'>Delete</a>
					</td>
					</tr>";
				}
				
				?>
			</tbody>
		</table>
	</div>
	
</body>
</html>

<script>
	$(".remove").click(function(){
		var bid = $(this).parents("tr").attr("bid");
		if(confirm('Are you sure to delete this record ?'))
		{
			$.ajax({
				url: 'delete.php',
				type: 'GET',
				data: {bid: bid},
				error: function() {
					alert('Something is wrong');
				},
				success: function(data) {
					$("#"+bid).remove();
					alert("Record deleted successfully");  
				}
			});
		}
	});
</script> 