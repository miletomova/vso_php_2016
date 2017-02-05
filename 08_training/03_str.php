<?php 

$news = array(
	0 => array(	'title'		=> 'title1',
				'date' 		=> 'date1',
				'content'	=>	'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere minima maiores vel illo officiis. Aliquam, aperiam, dolorem? Enim veritatis ipsa corporis neque quo, quam, voluptates reiciendis mollitia. Velit, qui, a?'),
	1 => array('title' 		=> 'title1',
				'date' 		=> 'date1',
				'content'	=>	'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere minima maiores vel illo officiis. Aliquam, aperiam, dolorem? Enim veritatis ipsa corporis neque quo, quam, voluptates reiciendis mollitia. Velit, qui, a?'),
	2 => array('title' 		=> 'title1',
				'date' 		=> 'date1',
				'content'	=>	'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere minima maiores vel illo officiis. Aliquam, aperiam, dolorem? Enim veritatis ipsa corporis neque quo, quam, voluptates reiciendis mollitia. Velit, qui, a?'),
	3 => array('title' 		=> 'title1',
				'date' 		=> 'date1',
				'content'	=>	'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere minima maiores vel illo officiis. Aliquam, aperiam, dolorem? Enim veritatis ipsa corporis neque quo, quam, voluptates reiciendis mollitia. Velit, qui, a?'),
	4 => array('title' 		=> 'title1',
				'date' 		=> 'date1',
				'content'	=>	'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere minima maiores vel illo officiis. Aliquam, aperiam, dolorem? Enim veritatis ipsa corporis neque quo, quam, voluptates reiciendis mollitia. Velit, qui, a?'),
	5 => array('title' 		=> 'title1',
				'date' 		=> 'date1',
				'content'	=>	'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere minima maiores vel illo officiis. Aliquam, aperiam, dolorem? Enim veritatis ipsa corporis neque quo, quam, voluptates reiciendis mollitia. Velit, qui, a?'),


	);

echo "<h1>Hot News</h1>";

$count = count($news);
$num = 0;

for ($i=$count-1; $i > $count-6; $i--) { 
	echo 'news ' . ($num+1);
	$num++;

	echo '<p>title - ';
	echo $news[$i]['title'].'</p>';

	echo '<p>date - ';
	echo $news[$i]['date'].'</p>';

	echo '<p>content - ';
	echo substr(($news[$i]['content']), 0, 60).'...</p>';
}