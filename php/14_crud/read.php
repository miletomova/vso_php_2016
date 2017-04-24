<?php 
include('db_connect.php');

//READ ROWS FROM TABLE UNITS


$read_query = "SELECT * FROM units WHERE date_deleted IS NULL";

$result = mysqli_query($conn, $read_query);

if (mysqli_num_rows($result) >0) {
	echo "<table border=1>";
	echo "<tr><td>UNIT NAME</td><td>UPDATE</td><td>DELETE</td></tr>";
	while($row = mysqli_fetch_assoc($result)){
		
			echo "<tr>";	
				
				echo "<td>" . $row['unit_name'] . "</td>";
				echo "<td><a href='update_view.php?unit_id=" .$row['unit_id'] . "'>update</a></td>";
				echo "<td><a href='delete.php?unit_id=" .$row['unit_id'] . "'>delete</a></td>";
				
						echo "</tr>";
			
	}
	echo "</table>";
} else {
		//!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!! during development !!!!!!!!!!!!!!!
	//echo "Error: " . $read_query . " - " . mysqli_error($conn);

	echo "Nothing found!";
	echo "<a href='create.php'>Enter new units</a>";
}



