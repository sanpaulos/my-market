
<?php 
	
	include ('bootstrap-admin.php');
var_dump($_POST);
 if (array_key_exists("send", $_POST)){
	 		$id=+$_POST['id'];
	 	 $conn = mysqli_connect('localhost', 'root', '', 'my_market');
	 	 if($conn){
	 	 	$sql = "Delete from user where id=$id";
	 	 	$result = mysqli_query($conn, $sql);
	 	 	if ($result) {
	 	 			header('Location: http://my-market.io/admin/admin_users.php');
	 	 	}
	 	 }
	 }
	 	mysqli_close($conn);
	 
	 	?>
