<?php 

$col = 5;
$row = 4;
$num = 1;

$arr = [];

for ($i=0; $i < $row; $i++) { 
	for ($j=0; $j <$col; $j++) { 
		$arr[$i][$j] = $num;
		$num++;
	}
}

echo "<table border=1>";
for ($m=0; $m < $col; $m++) { 
	echo "<tr>";

for ($p=0; $p < $row ; $p+=2) { 
	echo "<td>".$arr[$p][$m]."</td>";
	echo "<td>".$arr[$p+1][$col-$m-1]."</td>";
}

	echo "</tr>";

}
echo "</table>";