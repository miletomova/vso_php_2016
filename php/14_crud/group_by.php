<?php 
include('db_connect.php');

//READ ROWS FROM TABLE UNITS


$read_query = "SELECT *, COUNT(`product_name`) AS NumberOfProducts FROM `products` GROUP BY `unit_id` ";

$result = mysqli_query($conn, $read_query);
echo "<table border=1>";
if (mysqli_num_rows($result) >0) {
	while($row = mysqli_fetch_assoc($result)){
		
			echo "<tr>";	
				
				foreach ($row as $key => $value) {
					echo "<td>" . $key . ' - ' . $value . "</td>";
				}
						echo "</tr>";
			
	}
	echo "</table>";
} 