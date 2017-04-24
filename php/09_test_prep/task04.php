<?php 
function str_print($str, $sign){

	$arr_str = explode(' ', $str);
	$count = count($arr_str);

	echo "<ul>";
	for ($i=0; $i < $count; $i++) { 
		$cur_str = '';
		$cur_len = strlen($arr_str[$i]);

		$cur_str.= $arr_str[$i][0];

		for ($j=1; $j < $cur_len; $j++) { 
			$cur_str.= $sign . ' ';
		}
		echo '<li>' . $cur_str . '</li>';
		
		$arr_str[$i] = $cur_str;

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