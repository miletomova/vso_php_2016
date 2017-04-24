<?php 
include('db_connect.php');

//CREATE ROWS IN TABLE UNITS

?>

<form method="post" action="">
	<p>Мерна единица</p>
	<input type="text" name="unit_name">
	<input type="submit" name="submit" value="запиши">	
</form>

<?php 
if (!empty($_POST['submit'])) {

	$unit_name = $_POST['unit_name'];

	$insert_query = "INSERT INTO units (unit_name) VALUES ('$unit_name')";

	if (mysqli_query($conn, $insert_query)) {
		echo "New record created successfully";
	} else {
		//!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!! during development !!!!!!!!!!!!!!!
		echo "Error: " . $insert_query . " - " . mysqli_error($conn);
	}



}

echo "<a href='read.php'>All Units</a>";