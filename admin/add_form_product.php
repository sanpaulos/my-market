<!DOCTYPE html>
<html>
<head>
	<title>Add Product</title>
	<?php include ('bootstrap-admin.php'); ?>
</head>
<body>

<form method="POST" action="add_product.php" enctype ="multipart/form-data">
	<label>Product's Name
		<input type="text" name="name">
	</label><br>
	<label>Product's Cost
		<input type="number" name="cost">
	</label><br>
	<label>Photo
		<input type="file" name="photo">

	</label><br>
		<input type="submit" name="send" class="btn btn-secondary">
</form>
</body>
</html>