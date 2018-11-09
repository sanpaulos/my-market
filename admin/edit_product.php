
<?php 
	
	include ('bootstrap-admin.php');
var_dump($_POST);
 if (array_key_exists("send", $_POST)){
 	$photo = $_FILES ['photo'];

	 	$error = $_FILES["photo"]["error"];
	 	// pre($_FILES,true);
    if ($error == UPLOAD_ERR_OK) {
        $tmp_name = $_FILES["photo"]["tmp_name"];
        // basename() may prevent filesystem traversal attacks;

        $name = basename($_FILES["photo"]["name"]);  
        var_dump($tmp_name);   
        $photo_path=  "img/$name"; 
        move_uploaded_file($tmp_name, '../'.$photo_path);
        echo "<pre>";
        echo $ext = pathinfo($_FILES["photo"]["name"], PATHINFO_EXTENSION);
        var_dump($_FILES['photo']["name"]);
        
        echo "</pre>";

    }

	 	$name = $_POST ['name'];
	 	$cost = $_POST ['cost'];
	 	$id = $_POST['id'];

	 	 $conn = mysqli_connect('localhost', 'root', '', 'my_market');
	 	 if($conn){
	 	 	$sql = "Update product set name='$name', cost='$cost', photo_path = '$photo_path' where id=$id";
	 	 	$result = mysqli_query($conn, $sql);
	 	 	if ($result) {
	 	 			header('Location: http://my-market.io/admin/products.php');
	 	 	}
	 	 }
	 }
	 	mysqli_close($conn);
	 
	 	?>
</body>
</html>