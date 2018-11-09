<?php 
include ('bootstrap-admin.php');

 		if (array_key_exists("add", $_POST)){
	 		$name = $_POST ["name"];
	 	
	 	 	$conn = mysqli_connect('localhost', 'root', '', 'my_market');
	 	 		if($conn){
	 	 				$sql = "Insert into user(name) values(\"".$name."\")";
	 	 				$result = mysqli_query($conn, $sql);
	 	 				if ($result) {
	 	 					header('Location: http://my-market.io/admin/admin_users.php');
	 	 				}
	 	 		}
	 	}
	 			mysqli_close($conn);
	 	?>