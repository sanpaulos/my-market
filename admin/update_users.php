
<?php 
include ('bootstrap-admin.php');
var_dump($_POST);
 if (array_key_exists("send", $_POST)){
	 	$name = $_POST ['name'];
	 	$password = $_POST ['password'];
	 	$id = $_POST['id'];

	 	 $conn = mysqli_connect('localhost', 'root', '', 'my_market');
	 	 if($conn){
	 	 	$sql = "Update user set name='$name', password='$password' where id=$id";
	 	 	$result = mysqli_query($conn, $sql);
	 	 	if ($result) {
	 	 			header('Location: http://my-market.io/admin/admin_users.php');
	 	 	}
	 	 }
	 }
	 	mysqli_close($conn);
	 
	 	?>
</body>
</html>