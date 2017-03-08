<?php 
include('db_connect.php');
//<option value = city_id> city_name </option>
$read_query = "SELECT * FROM cities WHERE date_deleted IS NULL";
?>
<form action="">	
	<input type="text">
	<input type="text">
	<input type="text">
	<select name="city_id">
		<option value="">---</option>
		<?php 
		$result = mysqli_query($conn, $read_query);

		if (mysqli_num_rows($result) >0) {

			while($row = mysqli_fetch_assoc($result)){
				echo "<option value='".$row['city_id']."'>".$row['city_name']."</option>";

			}
		}
		?>
	</select>
</form>


