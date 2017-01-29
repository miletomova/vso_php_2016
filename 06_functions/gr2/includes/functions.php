<?php 

function create_input($name, $type, $value = NULL, $placeholder = NULL){

	return "<input type='".$type."' name='".$name."' value='". $value ."'>";
}

