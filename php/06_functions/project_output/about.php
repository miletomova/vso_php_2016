<?php 
$title 		= 'About';
$page_title = 'About Us';

include('includes/header.php');
?>
	<form method="post" action="">
		<input type="text" name="from">
		<input type="text" name="email">
		<textarea name="message"></textarea>
		<input type="submit" name="send">
	</form>
<?php 
include('includes/footer.php');
?>

