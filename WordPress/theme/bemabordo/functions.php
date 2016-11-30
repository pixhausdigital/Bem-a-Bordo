<?php
include_once ("include/lang_detect.php");
add_theme_support( 'post-thumbnails' ); 

add_action('after_switch_theme', 'BAB_setup_options');

global $BAB_db_version;
$BAB_db_version = '1.0';

function BAB_setup_options () {
	//add_option('mytheme_enable_catalog', 0);
	//add_option('mytheme_enable_features', 0);
	global $wpdb;
	global $BAB_db_version;

	$table_name = $wpdb->prefix . 'BAB_StaticText';
	
	$charset_collate = $wpdb->get_charset_collate();

	$sql = "CREATE TABLE $table_name (
		`id` varchar(90) NOT NULL,
  		`text_en` text NOT NULL,
  		`text_pt` text NOT NULL,
  		`time` datetime NOT NULL,
  		`parent` varchar(90) NOT NULL,
		PRIMARY KEY  (id)
	) $charset_collate;";
	
	require_once( ABSPATH . 'wp-admin/includes/upgrade.php' );
	dbDelta( $sql );

	update_option ( 'BAB_db_version', $BAB_db_version );
	
	BAB_install_data();
	
}




function BAB_install_data() {
	global $wpdb;
	
	
	$table_name = $wpdb->prefix . 'BAB_StaticText';
	
	include_once ("staticTextData.php");
	
}


function getStaticTextFromDatabase($id){
	global $wpdb;
	global $lang;
	$table_name = $wpdb->prefix . 'BAB_StaticText';
	$results = $wpdb->get_results( 'SELECT * FROM '.$table_name." WHERE id='".$id."'",ARRAY_A );
	foreach($results as $text){
		
		return ($text["text_".$lang]);
	}
	
}









function wpse_custom_excerpts($limit) {
    return wp_trim_words(get_the_excerpt(), $limit, "...");
}


function setup_BAB_theme_admin_menus() {
	add_menu_page(__('Static Text(BAB)','BAB-theme-menu'), __('Static Text(BAB)','BAB-theme-menu'), 'manage_options', 'BAB_StaticText', 'bab_toplevel_page' );

}
add_action("admin_menu", "setup_BAB_theme_admin_menus");

function bab_toplevel_page() {
	echo "page";
}


function echo_static_text($textName){
	//echo 	getStaticTextFromPost($textName);
	echo getStaticTextFromDatabase($textName);
}

function getStaticTextFromPost($category){
	global $lang;
	//var_dump($lang);
	$args = array(
	'posts_per_page'   => 1,
	'lang'   		=>	$lang,
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
	'author'	   	=> '',
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