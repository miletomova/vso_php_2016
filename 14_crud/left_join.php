<?php 
include('db_connect.php');

//READ ROWS FROM TABLE UNITS


$read_query = "SELECT * FROM `products` LEFT JOIN `units` ON `products`.`unit_id` = `units`.`unit_id` WHERE `products`.`date_deleted` IS NULL";

$result = mysqli_query($conn, $read_query);

if (mysqli_num_rows($result) >0) {
	echo "<table border=1>";
	echo "<tr><td>PRODUCT NAME</td><td>UNIT NAME</td><td>UPDATE</td><td>DELETE</td></tr>";
	while($row = mysqli_fetch_assoc($result)){
		
			echo "<tr>";	
				
				echo "<td>" . $row['product_name'] . "</td>";
				echo "<td>" . $row['unit_name'] . "</td>";
				echo "<td><a href='update_view.php?product_id=" .$row['product_id'] . "'>update</a></td>";
				echo "<td><a href='delete.php?product_id=" .$row['product_id'] . "'>delete</a></td>";
				
						echo "</tr>";
			
	}
	echo "</table>";
} else {
		//!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!! during development !!!!!!!!!!!!!!!
	//echo "Error: " . $read_query . " - " . mysqli_error($conn);

	echo "Nothing found!";
	echo "<a href='create.php'>Enter new units</a>";
}
