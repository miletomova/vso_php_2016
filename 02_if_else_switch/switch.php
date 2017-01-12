<?php 


switch ('Sunday') {
	case ('Monday'):		
	case ('Tuesday'):
	case ('Wednesday'):
	case ('Thursday'):
	case ('Friday'):
		echo "Work day";
		break;
	case 'Saturday':
	case 'Sunday':
		echo "Holy day";
		break;


	
	default:
		echo "Invalid day";
		break;
}

echo date('H:i M');

