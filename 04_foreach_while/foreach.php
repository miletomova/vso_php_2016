<?php 

$arr = [
		'name 1' => '12344666',
		'name 2' => '000-000-000',
		'name 3' => '+123-123-123',
		];

//first var
		foreach($arr as $name => $phone) {
			echo 'Name: ' . $name . ' - phone: ' . $phone . '<br>';
		}

//second var
		foreach($arr as $phone){
			echo 'Phone - ' . $phone . '<br>';
		}
