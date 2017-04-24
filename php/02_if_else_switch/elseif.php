<?php 
$user_age = 22;
$case_kindergarden = 'Kindergarden';
$case_school = 'School';
$case_work = 'Work';
$case_retirement = 'Retirement';

if ($user_age > 0 && $user_age <= 7) {
	echo "Go to $case_kindergarden";
} elseif ($user_age > 7 && $user_age <= 19) {
	echo "Go to $case_school";
} elseif ($user_age > 19 && $user_age <= 65) {
	echo "Go to $case_work";
} elseif ($user_age > 65) {
	echo "Go to $case_retirement";
} else {
	echo "Invalid age";
}