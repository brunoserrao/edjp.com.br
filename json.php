<?php
	header('Content-Type: application/json');
	define('WP_USE_THEMES', false);
	require_once('wp-load.php');
	query_posts( 'post_type=any&cat=9&showposts=100' );
	
	$jsonposts = array();
	
	if (have_posts()) {
		while (have_posts()) {
			the_post();
			
			$start =  date('Y-m-d h:i:s',strtotime(get_post_meta(get_the_ID(), 'datacalendarioinicial', true)));
			$end =  date('Y-m-d h:i:s',strtotime(get_post_meta(get_the_ID(), 'datacalendariofinal', true)));
			
			if (empty($end)) {
				$end = $start;
			}
			
			$jsonposts[] = array(
								'id' => get_the_ID(),
								'title' => get_the_title(),
								'start' => $start,
								'end' => $end,
								'url' => get_permalink()
			);
		}
	} 

	wp_reset_query();
	
	echo json_encode($jsonposts);
?>