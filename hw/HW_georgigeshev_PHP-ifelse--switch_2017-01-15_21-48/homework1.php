<?php
echo "</br>";
// $a=36;
// $b=40;
// $c=52;
// if ($a+$b>$c && $a+$c>$b && $b+$c>$a) {
// 	echo "yes";
// }
// else {
// 	echo "no";
// }
// echo "</br>";
$price=54;
$sum=0.10*$price*1.2;
$sum1=0.15*$price*1.2;
$sum2=0.25*$price*1.2;
$sum3=0.35*$price*1.2;
if ($price<50 ) {
	echo "$sum";
}
if ($price>50 && $price<=150) {
	echo "$sum1";
	
}
if ($price>150 && $price<=250) {
	echo "$sum2";
}
if ($price>250) {
	echo "$sum3";
}
echo "</br>";
$n1=2;
$n2=4;
$n3=8;
$n4=5;
$n5=10;
$n6=9;
$n7=7;
$n8=3;
$n9=6;
$one=8;
$two=6;
$three=1;
$four=1;
$five=1;
$six=9;
$seven=3;
$eight=2;
$nine=4;
$egn=10;
$result="($n1*$one)+($n2*$two)+($n3*$three)+($n4*$four)+($n5*$five)+($n6*$six)+($n7*$seven)+($n8*$eight)+($n9*$nine)/11";
if ($egn<10) {
	echo "$result";
}
else{
	echo "0";
}

// echo "</br>";
// $month=9;
// switch ($month) {
// 	case '1':
// 	echo "january";
// 		break;
// 	case '2':
// 	echo "febuary";
// 		break;
// 	case '3':
// 	echo "march";
// 		break;
// 	case '4':
// 	echo "april";
// 	    break;
// 	case '5':
// 	echo "may";
// 	    break;
// 	case '6':
// 	echo "june";
// 		break;
// 	case '7':
// 	echo "july";
// 		break;
// 	case '8':
// 	echo "august";
// 		break;
// 	case '9':
// 	echo "september";
// 		break;
// 	case '10':
// 	echo "octomber";
// 		break;
// 	case '11':
// 	echo "november";
// 		break;
// 	case '12':
// 	echo "december";
// 		break;
// }


// echo "</br>";
