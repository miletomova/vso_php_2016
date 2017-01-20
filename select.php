<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<form method="get">
		<select name="test">
			<option value="1">1</option>
			<option value="2">2</option>
			<option value="3">3</option>
		</select>
		
		<input type="submit" name="submit">
	</form>
	<?php 
if (!empty($_GET)) {
	var_dump($_GET);
}
	?>
</body>
</html>