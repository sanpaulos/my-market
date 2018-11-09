<html>   
<head>      
  <title>Update Users</title>   
  <?php include ('bootstrap-admin.php'); ?>
</head>      
<body>  
<h5>Change Your Data</h5> 

 <?php
 
 var_dump($_POST);
 	$id=+$_POST['id'];
 	$name="";
 	$password=""; 
 	$conn = mysqli_connect('localhost', 'root', '', 'my_market');
	if($conn){
 	 	$sql = "Select id, name, password from user WHERE id=$id";
 	 	$result = mysqli_query($conn, $sql);
 		    
 		if (mysqli_num_rows($result) > 0) 
      	{               
      	  	$row = mysqli_fetch_assoc($result);
      	  		$id = $row ['id']; 
				 $name = $row ['name'];         
				 $password = $row ['password'];
				 
      	  	           
		} else {              
		     echo "0 results";            
		}            
      	mysqli_close($conn);
				 }        
?> 

<form method="POST" action="update_users.php">
	<p>
		<label>Change user name:
			<input type="text" name="name" value="<?php echo $name ?>">
		</label>
	</p>
	<p>
		<label>Change user password:
			<input type="password" name="password" value="<?php echo $password ?>"><br>
		</label>		
	</p>
	<p><input type="hidden" name="id" value="<?php echo $id ?>">
		<input type="submit" name="send" value="Update">
	</p>
	
</form>
</body>
</html>