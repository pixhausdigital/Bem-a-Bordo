<?php

add_theme_support( 'post-thumbnails' ); 

function wpse_custom_excerpts($limit) {
    return wp_trim_words(get_the_excerpt(), $limit, "...");
}

function echo_static_text($textName){
	echo 	getStaticTextFromPost($textName);
}

function getStaticTextFromPost($category){
	//var_dump($category);
	$args = array(
	'posts_per_page'   => 1,
	'offset'           => 0,
	'category'         => '',
	'category_name'    => $category,
	'orderby'          => 'date',
	'order'            => 'DESC',
	'include'          => '',
	'exclude'          => '',
	'meta_key'         => '',
	'meta_value'       => '',
	'post_type'        => 'post',
	'post_mime_type'   => '',
	'post_parent'      => '',
	'author'	   => '',
	'author_name'	   => '',
	'post_status'      => 'private',
	'suppress_filters' => true 
);
	$aPost= array();
	$myposts = get_posts( $args );
	//var_dump($myposts);
	foreach ( $myposts as $post ) : setup_postdata( $post ); 
		$aPost[]=get_the_content();
	endforeach; 
	wp_reset_postdata();
	return $aPost[0];
}


?>