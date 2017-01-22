<?php
$mattrix = [
	[1, 2, 3],
	[4, 5, 6],
	[7, 8, 9],
];

// [0][0] [0][1] [0][2]
// [1][0] [1][1] [1][2]
// 20 21 22

echo "<table border=1>";
for($i = 0; $i < 3; $i++){
	echo "<tr>";

	for($j = 0; $j < 3; $j ++){
		echo "<td>";
		echo $mattrix[$i][$j];
		echo "</td>";
	}
	
	echo "</tr>";

}
echo "</table>";