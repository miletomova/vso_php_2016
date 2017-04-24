<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<style type="text/css">
		.first-column{
			background-color: #ccc;
		}
	</style>
</head>
<body>
<table border=1>
	<?php 
	$name 	= 'Георги';
	$phone 	= '000-000-000';

	// $name 	= 'Георги2';
	// $phone 	= '000-000-000';

	$name 	= 'Тихомир';
	$phone 	= '000-000-000';

	
	
echo "<tr>
		<td class='first-column'>име</td>
		<td>" . $name . "</td>
	</tr>";
echo "<tr>
		<td class='first-column'>телефон</td>
		<td>" . $phone . "</td>
	</tr>";

?>
</table>
</body>
</html>
