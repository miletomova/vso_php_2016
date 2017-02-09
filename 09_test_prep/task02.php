<?php 
// Дефинирайте масив, в който да може да запишете информация за поне пет вида храни. Информацията трябва да съдържа – название, калории/в 100 г/, гликемичен индекс /за 100 г/, мазнини /100г/, белтъчини /100 г/. Трябва да изчислите за всяка храна какъв е нейният хранителен коефициент, който се изчислява по формулата – ХК = (ГИ2+(Мазнини+Белтъчини))/(Калории*2). Този коефициент трябва да бъде добавен като елемент в масива и трябва да намерите средния коефициент за всички храни, за които съхранявате информация. Отпечатайте информацията под формата на таблица, като всяка колона трябва да има название – храна, калории, гликемичен индекс и т.н. Намерете елемента с най-нисък гликемичен индекс без да използвате готова рнр футкция. 

$foods = [
['name' => 'food1', 'cal' => 100, 'gi' => 10, 'fats' => 11, 'prots' => 105],
['name' => 'food2', 'cal' => 120, 'gi' => 18, 'fats' => 12, 'prots' => 1010],
['name' => 'food3', 'cal' => 180, 'gi' => 19, 'fats' => 19, 'prots' => 1018],
['name' => 'food4', 'cal' => 110, 'gi' => 11, 'fats' => 101, 'prots' => 101],
['name' => 'food5', 'cal' => 140, 'gi' => 12, 'fats' => 99, 'prots' => 10],
];

$count 	= count($foods);
$hk_all = 0;

//THE LEAST GI
$gi_min 	= $foods[0]['gi'];
$gi_min_ind = 0;

echo '<table border = 1>';
echo '<thead><th>храна</th><th>калории</th><th>ГИ</th><th>мазнини</th><th>белтъчини</th><th>ХК</th></thead>';

for ($i=0; $i < $count; $i++) { 
	
	
	$foods[$i]['hk'] = ($foods[$i]['gi']*$foods[$i]['gi']+($foods[$i]['fats']+$foods[$i]['prots']))/($foods[$i]['cal']*2);

	


	//AVERAGE HK
	$hk_all += $foods[$i]['hk'];

	//THE LEAST GI
	if ($foods[$i]['gi'] < $gi_min) {
		$gi_min = $foods[$i]['gi'];
		$gi_min_ind = $i;
	}

	//PRINTING FOOD INFO IN A TABLE
	echo '<tr>';

	foreach ($foods[$i] as $value) {
		echo '<td>'. $value .'</td>';
	}

	echo '</tr>';
}

echo '</table>';

echo "<pre>";
var_dump($foods);
echo "</pre>";

//AVERAGE HK
$hk_avg = $hk_all/$count;

echo 'средна стойност на ХК - ' . $hk_avg;
echo '/елемент с най-малък ГИ - ' .$foods[$gi_min_ind]['name'] . ' - ' . $foods[$gi_min_ind]['gi'];

