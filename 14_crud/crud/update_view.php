<?php 
include('db_connect.php');

//UPDATE ROWS IN TABLE CITIES
	
	$city_id = $_GET['city_id'];

	$read_query = "SELECT * FROM cities WHERE city_id = $city_id";

	$result = mysqli_query($conn, $read_query);

	if (mysqli_num_rows($result) !== 0) {
		$row = mysqli_fetch_assoc($result);
		var_dump($row);
		?>

		<form method="post" action="update.php">
			<p>Име на град</p>
			<input type="text" name="city_name" value="<?= $row['city_name']?>">
		<input type="hidden" name="city_id" value="<?php echo $row['city_id']?>">
			<input type="submit" name="submit" value="запиши">	
		</form>

		<?php
}
 else {
		//!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!! during development !!!!!!!!!!!!!!!
		echo "Error: " . $read_query . " - " . mysqli_error($conn);
	}

echo "<a href='read.php'>Back</a>";








