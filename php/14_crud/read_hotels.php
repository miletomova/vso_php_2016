<?php 
include('db_connect.php');

//READ ROWS FROM TABLE UNITS


$read_query = "SELECT * FROM `hotels` JOIN `cities` ON `hotels`.`city_id`=`cities`.`city_id` WHERE `hotels`.`date_deleted` IS NULL ";

$result = mysqli_query($conn, $read_query);

if (mysqli_num_rows($result) >0) {
	echo "<table border=1>";
	
	while($row = mysqli_fetch_assoc($result)){
echo '<pre>';
		var_dump($row);
echo "</pre>";		
			echo "<tr>";	
				echo "<td>". $row['hotel_name']."</td>";			
				echo "<td>". $row['city_name']."</td>";			
								echo "<td><a href='update_view.php?hotel_id=" .$row['hotel_id'] . "'>update</a></td>";
								echo "<td><a href='delete.php?hotel_id=" .$row['hotel_id'] . "'>delete</a></td>";
				
						echo "</tr>";
			
	}
	echo "</table>";
} else {
		//!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!! during development !!!!!!!!!!!!!!!
	//echo "Error: " . $read_query . " - " . mysqli_error($conn);

	echo "Nothing found!";
	echo "<a href='create.php'>Enter new units</a>";
}



