<?php 
// preg_match(pattern, subject);
// preg_match_all();
// preg_replace();
// preg_split();


$str = 'Lore3m ipsum dolor sit amet, consectetur adipisicing e1lit. Tempore minus, e2arum dicta, quos qui debitis nulla voluptatibus aut inventore ullam sit. Nisi re4rum maxime hic accusamus quas corrupti! Vitae6, provide8nt!';
$pattern = '/(e[0-9])([a-z])/';


$res = preg_match_all($pattern, $str, $matches, PREG_OFFSET_CAPTURE);


echo "<pre>";
var_dump($matches);
echo "</pre>";


