<?php 
$args = [
	'name'          =>  __('Right sidebar'),
	'id'            => 'right',
	'description'   => 'right',
	'class'         => 'col col13 no_margin_right',
	'before_widget' => '<ul class="tmo_ul_list">',
	'after_widget'  => '</ul>',
	'before_title'  => '<h4>',
	'after_title'   => '</h4>' 
	
	]; 

register_sidebars( 1, $args );

$args = [
	'name'          =>  __('Footer sidebar'),
	'id'            => 'footer',
	'description'   => 'footer',
	'before_widget' => '<div class="col col14">',
	'after_widget'  => '</div>',
	'before_title'  => '<h4>',
	'after_title'   => '</h4>' 
	
	]; 

register_sidebars(1, $args );

  register_nav_menu( 'header_menu', 'Header Menu');



