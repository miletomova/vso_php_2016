<?php 

$arr = [1, 2, 3];

$count = count($arr);

if ($count != 0) {
	foreach($arr as $value){
		if (is_int($value)) {
			# multiplication
		} else {
			echo 'Not a valid input';
			break;
		}
	}
	echo $multiplic;
} else {
	echo "Not a valid input";
}