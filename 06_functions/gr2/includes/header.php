<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title><?= $title ?></title>
</head>
<body>
<?php 
include('includes/functions.php');
echo '<h1>'.$title.'</h1>';
?>
<div>
	<ul>
		<li><a href="blog.php">Blog</a></li>
		<li><a href="index.php">Home</a></li>
		<li><a href="contact.php">Contact</a></li>
	</ul>
</div>