<?php 
$col = 5;
$row = 5;
$num = 1;
$arr = [];

for ($i=0; $i < $row; $i++) { 
	if($i != 0){
		for ($m=0; $m < $i; $m++) { 
			$arr[$i][$m] = 0;
		}
	}
	for($j = $i; $j < $col; $j++){
		$arr[$i][$j] = $num;
		$num++;
	}
	$num = 1;
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