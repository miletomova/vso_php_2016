<?php 

function create_input($name, $type, $value = NULL, $placeholder = NULL){
	echo '<label for="'.$name.'">Text</label>';
	echo '<input type="' . $type . '" name="'. $name .'" id='.$name.' value="'. $value .'" placeholder = "'.$placeholder.'">';
}