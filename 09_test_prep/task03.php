<?php 

function print_link($site){
	echo "<a href='http://www.". $site ."' target='_blank'>". $site ."</a>";
}

print_link('dir.bg');