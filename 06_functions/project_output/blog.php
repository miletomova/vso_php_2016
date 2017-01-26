<?php 
$title 		= 'Blog';
$page_title = 'Blog';


include('includes/header.php');
?>
	<form method="get" action="">
		<input type="text" name="keyword">
		<input type="submit" name="submit" value="search">		
	</form>
<?php 
include('includes/footer.php');
?>