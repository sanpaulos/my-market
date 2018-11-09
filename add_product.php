<?php 
include ('bootstrap.php');
 if (array_key_exists("send", $_POST)){
	 	$name = $_POST ['name'];
	 	$cost = $_POST ['cost'];
	 	$photo = $_FILES ['photo'];
	 	
	 	 $conn = mysqli_connect('localhost', 'root', '', 'my_market');
	 	 if($conn){
	 	 	$sql = "Insert into product(name, cost) values(\"".$name."\",\"".$cost."\")";
	 	 	$result = mysqli_query($conn, $sql);
	 	 	if ($result) {
	 	 		header('Location: http://my-market.io/products.php');
	 	 	}
	 	 }
	 }
	 	mysqli_close($conn);
	 	?>