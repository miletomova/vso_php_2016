<?php 

$str = 'iaia aii';

$len = strlen($str);



for($i = 0; $i < $len; $i++)
{
	if ($i < $len/2) {
		if($str[$i] == 'i'){
				$str[$i] = '@ ';
		}
	}
	else {
		if($str[$i] == 'a'){
		$str[$i] = '% ';
	}
	
	}
	
}


echo $str;