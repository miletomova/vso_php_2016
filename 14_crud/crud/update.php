<?php 
include('db_connect.php');

//UPDATE ROWS IN TABLE CITIES

var_dump($_POST);


	$city_id 	= $_POST['city_id'];
	$city_name 	= $_POST['city_name'];

	$update_query = "UPDATE `cities` SET `city_name`= '$city_name' WHERE `city_id` = $city_id";

	$result = mysqli_query($conn, $update_query);
	if ($result) {
		echo "Success!";
	} else {
	echo "Error: " . $update_query . " - " . mysqli_error($conn);

	}

	
echo "<a href='read.php'>Back</a>";








