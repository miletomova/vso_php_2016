<?php 
include('db_connect.php');

//UPDATE ROWS IN TABLE CITIES

	$city_id 	= $_GET['city_id'];
	//2017-02-26
	$date = date('Y-m-d');
	$delete_query = "UPDATE `cities` SET `date_deleted`= '$date' WHERE `city_id` = $city_id";

	$result = mysqli_query($conn, $delete_query);

	if ($result) {
		return header('Location: read.php');  
	} else {
	echo "Error: " . $delete_query . " - " . mysqli_error($conn);

	}
	









