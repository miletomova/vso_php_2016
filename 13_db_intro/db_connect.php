<?php 
$servername = 'localhost';
$username 	= 'root';
$password 	= '';
$dbname 	= 'vso_foods';

$conn = mysqli_connect($servername, $username, $password, $dbname);


if (!$conn){
	die ("Connection failed: " . mysqli_connect_error());
} else {
	echo "успешна връзка!";
}


	$q = "SELECT * FROM products";
	$result = mysqli_query($conn, $q);
	echo "<pre>";
	var_dump($result);
	echo "</pre>";

if (mysqli_num_rows($result) > 0) {
	while
		($row = mysqli_fetch_assoc($result)){ 
			echo "<pre>";
			var_dump($row);
			echo "</pre>";

			echo $row['product'] . ' ' .$row['calories'];
		}

	}

