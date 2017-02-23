<?php 

$row 	= 6; 
// $col 	= 4;
$step 	= 1;
$num = 1;
$j = 0;
$i = $row - 1;

$arr = array(array());
for ($p=0; $p < $row/2; $p++) { 
	
//1
while ($i >= 0 + $p ) {
	$arr[$i][$j] = $num;
	$num+= $step;
	$step++;
	$i--;
} 
echo '1 -';
$i++;
$j++;
$step--;
$num-=$step;

//2
while ($j < $row+$p) {	
	$num+= $step;	
	$arr[$i][$j] = $num;	
	$step--;
	$j++;
}
$i++;
$j--;
echo '2 -';

//3
while($i < $row-$p){
	$num-=$step;	
	$arr[$i][$j] = $num;
	$step++;
	$i++;



}

$j--;
$i--;
echo '3 -';

//4
while($j > 0+$p){
	$num-=$step;
	$arr[$i][$j] = $num;
	$step--;
	$j--;
}
$j++;
$i--;
$num+=$step;
$step++;

echo '4 -';

// //1
// while ($i >= 0+$p){
// 	$arr[$i][$j] = $num;
// 	$num+=$step;
// 	$step++;
// 	$i--;
// }
// $i++;
// $j++;
// $step--;
// $num-=$step;


// //2
// while ($j < $row-$p) {	
// 	$num+= $step;	
// 	$arr[$i][$j] = $num;	
// 	$step--;
// 	$j++;
// }
// echo $j;
// $i++;
// $j--;

// //3
// //3
// echo $j;
// while($i < $row-$p){
// 	$num-=$step;	
// 	$arr[$i][$j] = $num;
// 	$step++;
// 	$i++;
// }
// $j--;
// $i--;

}
echo "<pre>";
var_dump($arr);
echo "</pre>";

echo "<table border=1>";
for ($m=0; $m < $row; $m++) { 
	echo "<tr>";
	for ($p=0; $p < $row; $p++) { 
		echo "<td>" . $arr[$m][$p]."</td>";
	}
	echo "</tr>";
}
echo "</table>";