<?php 
include('db_connect.php');

$read_query = "SELECT * FROM `hotels` JOIN `cities` ON `hotels`.`city_id` = `cities`.`city_id` WHERE `hotels`.`date_deleted` IS NULL";

$result = mysqli_query($conn, $read_query);
//var_dump($result);
if (mysqli_num_rows($result) >0) {
	echo "<table border=1>";
	
	while($row = mysqli_fetch_assoc($result)){
		// echo "<pre>";
		// var_dump($row);
		// echo "</pre>";
			echo "<tr>";	
				
				echo "<td>" . $row['hotel_id'] . "</td>";
				echo "<td>" . $row['hotel_name'] . "</td>";
				echo "<td>" . $row['city_name'] . "</td>";
				echo "<td>" . $row['hotel_desc'] . "</td>";
				echo "<td>" . $row['rooms'] . "</td>";
				
				
						echo "</tr>";
			
	}
	echo "</table>";
}
