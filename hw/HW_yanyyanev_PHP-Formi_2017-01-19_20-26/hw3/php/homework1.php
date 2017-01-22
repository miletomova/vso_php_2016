<?php
  $_GET['a'];
  $_GET['b'];
  $_GET['c'];

if(!empty($_GET['submit'])){
	echo 'A= ' .$_GET['a'];
	echo '<p></p>';
	echo 'B= ' .$_GET['b'];
	 echo '<p></p>';
	echo 'C= ' .$_GET['c'];
}
echo '<p></p>';
if($_GET['a']+$_GET['b'] > $_GET['c']) {
	echo"Yes";
} else{
	echo"No";
}