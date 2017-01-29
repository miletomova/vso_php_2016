<?php 
$title = 'Home';

include('includes/header.php');
?>	
	<form method='post' action="">
		<input type="text" name="username">
		<input type="password" name="password">
		<input type="text" name="email">
		<input type="submit" name="submit" value="register">
	</form>
<?php 
include('includes/footer.php');
?>
