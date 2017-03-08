<?php
function check($arr){
	$count = count($arr);
	$flag = 0;
	$even = 0;
	$div7 = 0;
	if(!empty($arr)){
		for($i = 0; $i < $count; $i++){
			if (is_int($arr[$i])) {
				if($arr[$i]%2==0 && $arr[$i]!= 0){
					$even++;
				}
				if($arr[$i]%7==0  && $arr[$i]!= 0){
					$div7++;
				}
			} else {
				$flag++;
				break;
			}
		}
		if($flag > 0){
			echo 'Not a valid input!';
		} else {
			echo "Even - ". $even . ", Div 7 - " . $div7;
		}

	} else {
		echo 'Empty array';
	}

}

$arr = [1, 2, 14, 8, 10, 21, 3];
//$arr = [0, 0, 0, 0];
//$arr = ['Dd', 2, 14, 9, 12];
//$arr = [];
check($arr);

