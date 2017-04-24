<?php 
$num = 20;
$row = 4;
$col = 5;

echo '<table border=1>';
for($i = 0; $i < $row; $i++)
{
	echo "<tr>";
	for ($j=0; $j < $col; $j++) { 
		echo '<td>'. $num .'</td>';
		$num--;
	}
	echo "</tr>";
}

echo '</table>';