<?php 
//strpos - returns position from 0
//0 !!!! FALSE
$haystack = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nemo esse eligendi consequuntur in itaque placeat vel, perferendis at porro eaque, odio ullam repellat. Aliquam culpa praesentium, recusandae dolores laboriosam rerum!';
$needle = 'needle';
// $needle = 'lorem';
// $needle = 'Lorem';

$res = strpos($haystack , $needle);

var_dump($res);


