<?php 

//1 41 441 4441
//2 42 442 4442

$col = 6;
$row = 5;
$str_num = '';
$num = 1;

for ($i=0; $i < $row; $i++) { 

	for ($j=0; $j < $col; $j++) { 
		$arr[$i][$j] = $str_num . $num;
		$str_num .= '4';
		//'4'
		//'44'
		//'444'
		//'4444'
	}
	$num++;
	$str_num = '';

}

echo "<table border=1>";

for ($p=0; $p < $row; $p++) { 
	echo "<tr>";
	for ($q=0; $q < $col ; $q++) { 
		echo "<td>".$arr[$p][$q]."</td>";
	}

	echo "</tr>";
}
echo "</table>";