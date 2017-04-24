<?php

$str = '   1     ,  2       , 2    ,   2   ,    3, 2';
$res = explode(',', $str);
$count = count($res);
for ($i=0; $i < $count; $i++) { 
	$res[$i] = trim($res[$i]);
}
var_dump($res); 

