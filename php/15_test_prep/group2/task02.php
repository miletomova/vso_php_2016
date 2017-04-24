<?php 

function matrix($rows, $cols){
	$num = 7;
	$arr = [];
	for ($i=0; $i < $rows; $i++) { 
		for ($j=0; $j < $cols; $j++) { 
			$arr[$i][$j] = $num;
			$num = $num + 110;
		}
		$num = 7;
		$num = $num + 7*($i+1);

	}
	echo "<table border=1>";
	for($m = 0; $m < $rows; $m++){
		echo "<tr>";
		for($n = 0; $n < $cols; $n++){
			echo "<td>" .$arr[$m][$n] . "</td>";				
		}
		echo "</tr>";
	}
	echo "</table>";
}

matrix(6, 15);