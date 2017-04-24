<?php 

$str = 'lorem7 ipsum';

$len = strlen($str);

for ($i=0; $i < $len; $i++) { 
	if (ord($str[$i])>=48 && ord($str[$i])<=57) {
		echo $str[$i];
	}
}

echo phpinfo();