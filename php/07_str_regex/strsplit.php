<?php 
$str = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos velit facere cumque eos corrupti ducimus minus ut nemo, repellendus inventore, consectetur explicabo vitae aspernatur odit eius veritatis eaque odio est.';

$res = str_split($str, 5);
echo "<pre>";
var_dump($res);
echo "</pre>";