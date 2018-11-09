<?php 
include ('bootstrap-admin.php');
include ('title.php');
	$conn = mysqli_connect('localhost', 'root', '', 'my_market');
		
		$sql = 'SELECT * FROM product';
		$result = mysqli_query($conn, $sql);

			$rows = mysqli_fetch_all($result, MYSQLI_ASSOC);
		$i=0;
		$tr_open = false;

		
		echo "<a href='add_form_product.php' style='
    margin-left: 130px;
'>"." ADD "."</a>";
		

		echo "<table border = 1 style='text-align: center;'>";

		foreach ($rows as $row) {
			$i++;
			if ($i%3==1) {				
				echo "<tr>";
				$tr_open = true;
			}

			echo "<td style='border: 2px solid;'>";
				echo $row['id']."<br>";
				echo "<a style='margin: 5px;'' href='product_view.php?id=".$row['id']."'>".$row['name']."</a><br>";
				if ($row['photo_path']) {
					echo "<img style='width: 75px; height: 75px; margin: 5px;'  src='../".$row['photo_path']."'><br>";
				}else{
					echo " ";
				}
				
				echo $row['cost'];
				echo "<p><form method='POST' action='edit_form_product.php'>
						<input type='hidden' name='id' value=".$row['id'].">
									<input type='submit' name='send' value='Edit'>
								</form></p>
								<form method='POST' action='delete_product.php'><input type='hidden' name='id' value=".$row['id'].">
									<input type='submit' name='send' value='Delete'><br>
									
								
								</form>";
								
			echo "</td>";
			
			
			if ($i%3==0) {
				echo "</tr>";
				$tr_open = false;
			}
			
		}
			if ($tr_open) {
					echo "</tr>";
					$tr_open = false;
			}

		echo "</table>"
?>