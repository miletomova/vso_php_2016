<?php 

$arr = [];
$row = 4;
$col = 10;
$num = 1;

for ($i=0; $i < $row; $i++) { 
	for($j = 0; $j < $col; $j++){
		$arr[$i][$j] = $num;
		$num++;
	}
}

echo "<table border=1>";
for ($m=0; $m < $row; $m++) { 
	echo "<tr>";
	for ($n=0; $n < $col; $n++) { 
		echo "<td>".$arr[$m][$n]."</td>";
	}
	echo "</tr>";
}
echo "</table>";