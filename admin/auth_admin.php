<?php 
	include ('bootstrap-admin.php');
	
// var_dump($_POST);

	 	$login = $_POST ['login'];
	 	$password = $_POST ['password'];
	 	// $id = $_POST['id'];
	 	 $conn = mysqli_connect('localhost', 'root', '', 'my_market');
	 	 if($conn){
	 	 	$sql = "Select id = 1 from admin where login = '$login' and password = '$password'";
	 	 	$result = mysqli_query($conn, $sql);
	 	 }
	 	 session_start();
			$_SESSION['auth_id']=1;
			$_SESSION['name']='Admin';
	 	 if($result !==null && mysqli_num_rows($result) > 0){
	 	 		echo "<a href='products.php'>Товары</a><br>
				<a href='admin_users.php'>Пользователи</a><br>";
			// session_start();
			// $_SESSION['auth_id']=1;
			// $_SESSION['name']='privet';
			// var_dump($_SESSION);				
	 	 }else {
	 	 	header('Location: http://my-market.io/admin');
	 	 }
	 	mysqli_close($conn);
	 	
	 	
	 	
	 	
	 	
	 	
?>