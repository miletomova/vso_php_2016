<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
<form action="" method="get">
<input type="text" name="test">
<input type="submit" name="submit" value="submit">
</form>
	<?php
	//check if submit`s been pressed
	if (!empty($_GET)) {
		echo $_GET['test'];
	}
	
	?>
</body>
</html>
