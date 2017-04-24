<?php 

$user_age = 13;

switch ($user_age) {
	case ($user_age > 0 && $user_age <= 7):
		echo 'Go to kindergarden';
	case ($user_age >19 && $user_age <=65):
			echo "Go to work";		
	case ($user_age > 7 && $user_age <= 19):
		echo 'Go to school';
		
	
	default:
		echo "Invalid age";
		break;
}
