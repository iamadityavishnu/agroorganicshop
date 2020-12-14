<?php

include('includes/dbconnect.php');

$product_wt = $_GET['w'];
$product_id = $_GET['p'];

$get_price = "SELECT product_price, product_price2, product_price3 FROM products WHERE product_id = $product_id";

$run_price = mysqli_query($con, $get_price);

$row_price = mysqli_fetch_array($run_price);

$get_weight = "SELECT product_wt1, product_wt2, product_wt3 FROM products WHERE product_id=$product_id";

$run_weight = mysqli_query($con,$get_weight);

$row_weight = mysqli_fetch_array($run_weight);

$i = 0;

foreach($row_weight as $weight) {
	if($weight == $product_wt){
		echo $row_price[$i/2];
		break;
	}else{
		$i++;
	}
}

?>