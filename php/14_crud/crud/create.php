<?php 
include('db_connect.php');

?>
<form method="post" action="">
	<input type="text" name="city_name">
	<input type="submit" name="submit" value="submit">
</form>
<?php 
if(isset($_POST['city_name'])){

$city_name = $_POST['city_name'];

$insert_query = "INSERT INTO `cities`(`city_name`) VALUES ('$city_name')";

if(mysqli_query($conn, $insert_query)){
	echo "Success!";
} else {
	//!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!! during development !!!!!!!!!!!!!!!
		echo "Error: " . $insert_query . " - " . mysqli_error($conn);

}

}