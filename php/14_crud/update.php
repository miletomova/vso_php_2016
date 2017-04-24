<?php 
include('db_connect.php');

//UPDATE ROWS IN TABLE UNITS
	
	$unit_id 	= $_POST['unit_id'];
	$unit_name 	= $_POST['unit_name'];

	$update_query = "UPDATE `units` SET `unit_name`= '$unit_name' WHERE `unit_id` = $unit_id ";

	$result = mysqli_query($conn, $update_query);
	if ($result) {
		echo "Success!";
	} else {
	echo "Error: " . $update_query . " - " . mysqli_error($conn);

	}

	
echo "<a href='read.php'>Back</a>";








