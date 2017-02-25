<?php 
include('db_connect.php');

//UPDATE ROWS IN TABLE UNITS


	
	$unit_id = $_GET['unit_id'];

	$read_query = "SELECT * FROM units WHERE unit_id = $unit_id";

	$result = mysqli_query($conn, $read_query);

	if (mysqli_num_rows($result) !== 0) {
		$row = mysqli_fetch_assoc($result);

		?>

		<form method="post" action="update.php">
			<p>Мерна единица</p>
			<input type="text" name="unit_name" value="<?= $row['unit_name']?>">
			<input type="hidden" name="unit_id" value="<?= $row['unit_id']?>">
			<input type="submit" name="submit" value="запиши">	
		</form>

		<?php
	}
 else {
		//!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!! during development !!!!!!!!!!!!!!!
		echo "Error: " . $read_query . " - " . mysqli_error($conn);
	}

echo "<a href='read.php'>Back</a>";








