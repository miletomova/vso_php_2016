<?php 


function create_arr($a, $b){

if ($a < $b) {
		
$arr = range($a, $b);

echo "<pre>";
var_dump($arr);
echo "</pre>";
} elseif($a>$b){


$arr = range($b, $a);

echo "<pre>";
var_dump($arr);
echo "</pre>";
}
}

create_arr(10, 1);
create_arr(7, 17);