<!Doctype html>
<html>
<head>
<title> </title>
</head>
<body>
<?php
     session_start();
     if (!empty($_POST)) {
		$_SESSION['username'] = $_POST['username'];
	
     echo "Hello, " . $_SESSION['username'];
     echo '<a href="my_copy.php">Next</a>';
 }
?>
</body>
</html>
