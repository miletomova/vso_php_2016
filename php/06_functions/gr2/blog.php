<?php

$title = 'blog';

include('includes/header.php');
?>

<form method="post" action="">
	<input type="text" name="username">
	<input type="text" name="email">
	<textarea name="message" ></textarea>
	<input type="submit" name="submit" value="comment">	
</form>
<?php
include('includes/footer.php');
?>
