<?php 
$title = 'Blog';
include('includes/header.php');
include('includes/functions.php');
?>	
<form method="post" action="">
	<!-- <input type="text" name="name"> -->
	<?php
	create_input('name', 'text', '', 'Place Holder');
	create_input('email', 'text');
	
	?>
	<textarea name="message"></textarea>
	<!-- <input type="submit" name="submit" value="comment">	 -->	
	<?php 
	create_input('submit', 'submit');
	
	?>
</form>
<?php 
include('includes/footer.php');
?>
