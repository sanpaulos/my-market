<html>   
<head>      
  <title>Update Product</title>   
</head>      
<body>  
<h5>Change</h5> 

 <?php
include ('bootstrap-admin.php');
 	$id=+$_POST['id'];
 	$name="";
 	$cost=""; 
 	$photo_path="";
 	$conn = mysqli_connect('localhost', 'root', '', 'my_market');
	if($conn){
 	 	$sql = "Select id, name, cost, photo_path from product WHERE id=$id";
 	 	$result = mysqli_query($conn, $sql);
 		    
 		if (mysqli_num_rows($result) > 0) 
      	{               
      	  	$row = mysqli_fetch_assoc($result);
      	  		$id = $row ['id']; 
				 $name = $row ['name'];         
				 $cost = $row ['cost'];
				 $photo_path = $row ['photo_path'];
				 
      	  	           
		} else {              
		     echo "0 results";            
		}            
      	mysqli_close($conn);
				 }        
?> 

<form method="POST" action="edit_product.php" enctype ="multipart/form-data">
	<p>
		<label>Change product name:
			<input type="text" name="name" value="<?php echo $name ?>">
		</label>
	</p>
	<p>
		<label>Change product password:
			<input type="text" name="cost" value="<?php echo $cost ?>"><br>
		</label>		
	</p>
		<label>Change Photo:
		<input type="file" name="photo" value="<?php echo $photo_path ?>">

	</label><br>
	<p><input type="hidden" name="id" value="<?php echo $id ?>">
		<input type="submit" name="send" value="Update">
	</p>
<br>
	
</form>
</body>
</html>