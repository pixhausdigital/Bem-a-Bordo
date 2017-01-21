<?php
//include_once ("include/lang_detect.php");
global $lang;
 if(function_exists('pll_current_language')) {
	//var_dump(pll_current_language());
	$lang=pll_current_language();
 }else{
	if(!isset($_GET["lang"])){
		$_GET["lang"] = "pt";
	}
	$lang=$_GET["lang"];
 }
add_theme_support( 'post-thumbnails' ); 

add_action('after_switch_theme', 'BAB_setup_options');

global $BAB_db_version;
$BAB_db_version = '1.0';

function BAB_setup_options () {
	global $wpdb;
	global $BAB_db_version;

	$table_name = $wpdb->prefix . 'BAB_StaticText';
	
	$charset_collate = $wpdb->get_charset_collate();

	$sql = "CREATE TABLE $table_name (
		`id` varchar(90) NOT NULL,
		`subID` mediumint(9) NOT NULL AUTO_INCREMENT,
  		`text_en` text NOT NULL,
  		`text_pt` text NOT NULL,
  		`time` datetime NOT NULL,
  		`container` varchar(90) NOT NULL,
		`textClass` varchar(90) NOT NULL,
		PRIMARY KEY  (subID)
	) $charset_collate;";
	
	require_once( ABSPATH . 'wp-admin/includes/upgrade.php' );
	dbDelta( $sql );
	
	$table_name = $wpdb->prefix . 'BABP';
	
	$charset_collate = $wpdb->get_charset_collate();

	$sql = "CREATE TABLE $table_name (
		id mediumint(9) NOT NULL AUTO_INCREMENT,
		manual mediumint(9) NOT NULL,
		time datetime DEFAULT '0000-00-00 00:00:00' NOT NULL,
		name tinytext NOT NULL,
		job tinytext NOT NULL,
		text_en text NOT NULL,
		job_en tinytext NOT NULL,
		text text NOT NULL,
		facebook varchar(55) DEFAULT '' NOT NULL,
		linkedin varchar(55) DEFAULT '' NOT NULL,
		image varchar(500) DEFAULT '' NOT NULL,
		PRIMARY KEY  (id)
	) $charset_collate;";

	require_once( ABSPATH . 'wp-admin/includes/upgrade.php' );
	dbDelta( $sql );

	update_option ( 'BABP_db_version', $BABP_db_version );
	add_option('BABP_sortBy', 'id');
	add_option('BABP_sortDirection', 'ASC');

	update_option ( 'BAB_db_version', $BAB_db_version );
	
	add_option ( 'BAB_Carousel_img_1', NULL );
	add_option ( 'BAB_Carousel_img_2', NULL );
	add_option ( 'BAB_Carousel_img_3', NULL );
	add_option ( 'BAB_Carousel_img_4', NULL );
	
	BAB_install_data();
	BABP_install_data();
	
}




function BAB_install_data() {
	global $wpdb;
	
	
	$table_name = $wpdb->prefix . 'BAB_StaticText';
	
	include_once ("staticTextData.php");
	
}

function BABP_install_data() {
	global $wpdb;
	
	$welcome_name = 'Mr. WordPress';
	$welcome_job = 'a Job Title';
	$welcome_facebook = 'https://www.facebook.com/';
	$welcome_linkedin = 'https://www.linkedin.com/';
	$welcome_text = 'Congratulations, you just completed the installation!';
	$welcome_image='';
	
	$table_name = $wpdb->prefix . 'BABP';
	
	$wpdb->insert( 
		$table_name, 
		array( 
			'time' => current_time( 'mysql' ), 
			'manual' => "0", 
			'name' => $welcome_name, 
			'job' => $welcome_job, 
			'job_en' => $welcome_job, 
			'facebook' => $welcome_facebook, 
			'linkedin' => $welcome_linkedin, 
			'text' => $welcome_text,
			'text_en' => $welcome_text, 
			'image' => $welcome_image, 
		) 
	);
}


function getStaticTextFromDatabase($id){
	global $wpdb;
	global $lang;
	$table_name = $wpdb->prefix . 'BAB_StaticText';
	$results = $wpdb->get_results( 'SELECT * FROM '.$table_name." WHERE id='".$id."'",ARRAY_A );
	foreach($results as $text){
		
		return html_entity_decode($text["text_".$lang]);
	}
	
}

function getCarrouselImage($id){
	$imgID= get_option( 'BAB_Carousel_img_'.$id);
	if($imgID !== "" && $imgID !== NULL){
		return wp_get_attachment_url($imgID);
	}else{
		return get_bloginfo('template_directory')."/image/carousel".($id-1).".jpg";
	}
}









function wpse_custom_excerpts($limit) {
    return wp_trim_words(get_the_excerpt(), $limit, "...");
}


function setup_BAB_theme_admin_menus() {
	add_menu_page(__('Static Text(BAB)','BAB-theme-menu'), __('Static Text(BAB)','BAB-theme-menu'), 'manage_options', 'BAB_StaticText', 'bab_toplevel_page' );
	
	add_menu_page(__('People(BAB)','BAB-people-menu'), __('People(BAB)','BAB-people-menu'), 'manage_options', 'BAB_People', 'babp_toplevel_page' );

    // Add a submenu to the custom top-level menu:
    add_submenu_page('BAB_People', __('Options','BAB-people-menu'), __('Options','BAB-people-menu'), 'manage_options', 'Options', 'babp_options_page');

    // Add a second submenu to the custom top-level menu:
    //add_submenu_page('BAB_People', __('Delete Person','menu-test'), __('Delete Person','menu-test'), 'manage_options', 'Delete_People', 'mt_sublevel_page2');

}
add_action("admin_menu", "setup_BAB_theme_admin_menus");

include ("include/admin/pages/menupages.php");

include ("include/admin/pages/tablePeople.php");


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

function BABP_getPeople($lang){
	global $wpdb;
	$sortBy = get_option( 'BABP_sortBy');
	$sortDirection = get_option( 'BABP_sortDirection');
	$table_name = $wpdb->prefix . 'BABP';
	$people = $wpdb->get_results( 'SELECT * FROM '.$table_name.' ORDER BY `'.$table_name.'`.`'.$sortBy.'` '.$sortDirection.'');
	
	foreach($people as $person){?>
		
        <div id="person<?php echo $person->id; ?>" class="person">
            		<span class="personPhoto"><img src="<?php echo site_url().$person->image; ?>" alt=""/></span>
                    <span class="personText">
                    	<span class="personSocialContainer"><a href="<?php echo $person->facebook; ?>"><img src="<?php bloginfo('template_directory');?>/image/weAreFacebook.png" alt=""/></a><a href="<?php echo $person->linkedin; ?>"><img src="<?php bloginfo('template_directory');?>/image/weAreLinkedin.png" alt=""/></a></span>
                    	<div class="personName"><?php echo $person->name; ?></div>
                        <div class="personJob"><?php  if($lang == "pt"){echo $person->job;} elseif($lang == "en"){ echo $person->job_en;} ?></div>
                        </span>
                        <div class="personDescription"><?php if($lang == "pt"){ echo $person->text; }elseif($lang == "en"){ echo $person->text_en;} ?></div>
                    
        </div>
	
    
    <?php
	}
	//echo "people";
}

?>