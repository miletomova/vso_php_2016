<?php 

function str_print($str, $sign){

	$arr_str = explode(' ', $str);
	$count = count($arr_str);

	echo "<ul>";
	for ($i=0; $i < $count; $i++) { 

		$cur_len = strlen($arr_str[$i]);
		echo '<li>'.$arr_str[$i][0];

		for ($j=1; $j < $cur_len; $j++) { 
			echo ' ' .$sign . ' ';
		}
		echo '</li>';

	}

	echo "</ul>";
}

if (empty($_POST)) {
	?>

	<form action="" method="post">
		<input type="text" name="str">
		<input type="text" name="sign">
		<input type="submit" name="submit" value="submit">
	</form>
	<?php
} else {
	$str = $_POST['str'];
	$sign = $_POST['sign'];
	
	str_print($str, $sign);
}