<?php 

function count_number($arr, $num){
	$count = count($arr);
	$check = 0;

	for ($i=0; $i < $count; $i++) { 
		if ($num === $arr[$i]) {
			$check++;
		}
	}

	if ($check === 0) {
		echo 'Not in array';
	} else {
		echo $check;
	}

}

$arr = [2, 11, 2, 3, 0, 2];
$num = '2';
// 3
// $arr = [0, 4, 7, 0, 0, 0] ;
// $num = 0;
// // 4
// $arr = [4, 15, 27, 33, 1]; 
// $num = 8;
// not in array
count_number($arr, $num);