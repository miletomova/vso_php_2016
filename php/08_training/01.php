<?php 

function print_arr($arr, $m, $n){

for ($i=0; $i < $m; $i++) { 
	
	for ($j=0; $j < $n; $j++) { 
		echo 'a[' . $i . '][' . $j . '] = '.$arr[$i][$j] . '  ';
	}
	echo "<br>";
}
}


//$myArr = [[5, 14, 2], [20, 9, 4]];
$myArr = [[5, 14, 2], [20, 9, 4], [0, 8, 9]];

print_arr($myArr, 3, 3);