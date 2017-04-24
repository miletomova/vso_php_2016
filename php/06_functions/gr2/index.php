<?php
$title = 'home';
include('includes/header.php');

?>
<form method="post" action="">
	<!-- <input type="text" name="username"> -->
	<?php
	create_input('username', 'text');
	create_input('password', 'password');
	create_input('email', 'text');
	create_input('submit', 'submit', 'register');
	
	?>
	
</form>
<?php
include('includes/footer.php');
?>