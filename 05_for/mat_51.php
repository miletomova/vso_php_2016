<?php 
$arr = array();
$row = 5;
$col = 5;
$num = 1;
$str_num = '';

for($i = 0; $i < $row; $i++){
	for($j = 0; $j < $col; $j++){		
			$arr[$i][$j] = $helper_num.$num;
			$str_num .= '4';				
	}
	$num++;
	$str_num = '';	
}

echo '<pre>';
var_dump($arr);
echo '</pre>';
