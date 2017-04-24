
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
<?php 

if (empty($_GET)) {
	
?>
	<form method="get" action="">
		<input type="text" name="arr">
		<input type="submit" name="submit">		
	</form>
	<?php 
} else {
function greater_than_neighbours($arr){
	$ind = -1;
	$count = count($arr);

	for ($i=0; $i < $count; $i++) { 
		if ($i === 0) {
			if ($arr[$i]>$arr[$count-1] && $arr[$i]>$arr[$i+1]) {
				$ind = $i;
				break;
			}
		}
		elseif ($i!==($count-1)) {
			if ($arr[$i]>$arr[$i-1] && $arr[$i]>$arr[$i+1]) {
				$ind = $i;
				break;
			}
		} elseif($i===($count-1)) {
			if ($arr[$i]>$arr[$i-1] && $arr[$i]>$arr[0]) {
				$ind = $i;
			}
		}
		
		
	}
	if($ind!== -1) {echo $ind;} else {echo'No such element';
	}
}
	
	
	$str_arr = $_GET['arr'];
	$arr = explode(', ', $str_arr);
	var_dump($arr);
	greater_than_neighbours($arr);
}
?>
</body>
</html>
