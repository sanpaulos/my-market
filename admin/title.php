<?php 
include ('bootstrap-admin.php');
session_start();
echo "Hi ".$_SESSION['name'];
echo "<a href ='logout.php'> Logout </a>" ;
if (!isset($_SESSION['auth_id']) && !$_SESSION['auth_id'] > 0) {
			header('Location: http://my-market.io/admin');
		} 
?>