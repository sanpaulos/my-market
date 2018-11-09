<?php 
include ("bootstrap.php");
	$conn = mysqli_connect('localhost', 'root', '', 'my_market');
		
		$sql = 'SELECT * FROM product';
		$result = mysqli_query($conn, $sql);

			$rows = mysqli_fetch_all($result, MYSQLI_ASSOC);
		$i=0;
		$tr_open = false;
		
		

		echo "<table border = 1 style='text-align: center;'>";

		foreach ($rows as $row) {
			$i++;
			if ($i%3==1) {				
				echo "<tr class='table-success'>";
				$tr_open = true;
			}
			echo "<td style='border: 2px solid; padding: 5px;'>";
				echo $row['id']."<br>";
				echo "<a style='margin: 5px;'' href='product_view.php?id=".$row['id']."'>".$row['name']."</a><br>";
				if ($row['photo_path']) {
					echo "<img style='width: 75px;'  src='../".$row['photo_path']."'><br>";
				}else{
					echo " ";
				}
				echo $row['cost'];
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