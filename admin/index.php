<html>   
<head>      
  <title>Admin</title>  
  <?php include ('bootstrap-admin.php'); ?>  
</head>      
<body> 
<h5>Welcome</h5>

<form method="POST" action="auth_admin.php">
	<p>
		<label>Login:
			<input type="text" name="login">
		</label>
	</p>
	<p>
		<label>Password:
			<input type="password" name="password"><br>
		</label>
	</p>
	
	<p>
		<input type="submit" name="send" class="btn btn-danger" value="Enter">
	</p>
</form>
</body>
</html>