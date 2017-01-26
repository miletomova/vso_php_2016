<?php 
$title 		= 'Contact';
$page_title = 'Contact Us';


include('includes/header.php');
include('includes/functions.php');
?>
<form method="post" action="">
	<?php 
	$name = 'first_name';
	input_create('text', $name);
	input_create('text', 'last_name');
	input_create('text', 'email');
	input_create('text', 'subject');

	?>		
	<textarea name="message"></textarea>
	<?php 
	input_create('submit', 'submit', 'submit');
	?>
</form>
<?php 
include('includes/footer.php');
?>