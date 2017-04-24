<?php 
include('db_connect.php');

//UPDATE ROWS IN TABLE UNITS
	
	$unit_id 	= $_GET['unit_id'];

	$date = date('Y-m-d');


	$delete_query = "UPDATE `units` SET `date_deleted`= '$date' WHERE `unit_id` = $unit_id ";

	$result = mysqli_query($conn, $delete_query);

	if ($result) {
		return header('Location: read.php');  
	} else {
	echo "Error: " . $update_query . " - " . mysqli_error($conn);

	}

	








