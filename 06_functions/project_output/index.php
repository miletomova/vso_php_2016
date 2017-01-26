<?php 
$title 		= 'Home';
$page_title = 'Home';

include('includes/header.php');
include('includes/functions.php');
?>	
<form method="post" action="">
	<?php 
	input_create('text', 'first_name');
	input_create('text', 'last_name');
	input_create('text', 'email');
	input_create('password', 'password');
	input_create('submit', 'submit', 'submit');

	?>


</form>
<?php 
include('includes/footer.php');
?>