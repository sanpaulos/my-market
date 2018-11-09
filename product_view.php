<?php 
include ('bootstrap.php');
$conn = mysqli_connect('localhost', 'root', '', 'my_market');
		
		
		$id=$_GET['id'];
		if($conn){
			$sql = "SELECT * FROM product where id=$id";
 	 	$result = mysqli_query($conn, $sql);
 		    
 		if (mysqli_num_rows($result) > 0) 
      	{  $id=$_GET['id'];             
      	  	$row = mysqli_fetch_assoc($result); 
      	  	
			echo "NAME: ".$row ['name']."<br>";         
			echo "COST: ".	 $row ['cost']."<br>";
			echo "SIZE: ".$row ['size']."<br>";
			echo "COLOR: ". $row ['color']."<br><br>";
			if ($row['photo_path']) {
					echo "PHOTO:<br> <img style='width: 75px;'  src='../".$row['photo_path']."'><br>";
				}else{
					echo " ";
				};
				 if ($result) {
				 	echo "<a href='http://my-market.io/product.php'><br>All Products</a>";
				 }
      	  	           
		} else {              
		     echo "0 results";            
		}            
      	mysqli_close($conn);
				 }        
?>