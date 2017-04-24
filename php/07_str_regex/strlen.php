<?php 

$str = 'остава остава';

$res = explode(' ', $str);

$count = count($res);

for ($i=0; $i < $count; $i++) { 
	

	$res[$i] = str_split($res[$i], 2);

}


var_dump($res);

$str2 = 'place';

$str2[3] = '4';

echo $str2;