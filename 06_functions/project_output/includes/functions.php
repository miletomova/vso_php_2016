<?php 
//CREATES INPUT TYPE= TEXT WITH NAME = NAME
function input_text_name_create(){
	echo '<input type="text" name="name">';
}

// //CREATES INPUT TYPE =  WITH two PARAMs = type&name

// function input_create($type, $name){
// 	echo '<input type="'. $type .'" name="'.$name.'">';
// }

//CREATES INPUT TYPE = WITH two PARAMs = TYPE&NAME and third optional param

function input_create($type, $name, $value = NULL){
	//echo '<label for="'.$name.'">'.$name.'</label>';
	echo '<p><input type="'. $type .'" name="'.$name.'" value= "' . $value . '" id="'.$name.'"></p>';
}

