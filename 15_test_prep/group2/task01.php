<?php 
function check($arr){
	$count = count($arr);
	$even = 0;
	$div7 = 0;
	$flag = false;

	if($count !== 0){
		for ($i=0; $i < $count; $i++) { 
			if(is_int($arr[$i])){
				if($arr[$i]%2 == 0 && $arr[$i] > 0){
					$even++;
				}

				if($arr[$i]%7 == 0 && $arr[$i] > 0){
					$div7++;
				}

			} else {
				$flag = true;
				break;
			}
		}//end for

		if ($flag) {
			echo "Not a valid input!";
		} else {
			echo "Even - ". $even . ", Div 7 - " . $div7;
		}

	} else {
		echo "Empty array!";
	}

}

//$arr = [1, 2, 14, 8, 10, 21, 3];
//$arr = [0, 0, 0, 0];
//$arr = ['Dd', 2, 14, 9, 12];
$arr = [];

check($arr);