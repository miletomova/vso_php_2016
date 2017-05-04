<?php 

$args = [
	'name'          => __( 'Right bar'),
	'id'            => 'right',
	'before_widget' => '<p>',
	'after_widget'  => '</p>',
	'before_title'  => '<h3>',
	'after_title'   => '</h3>' 
];

register_sidebar($args);

register_nav_menu( 'header_menu', 'Header Menu');
