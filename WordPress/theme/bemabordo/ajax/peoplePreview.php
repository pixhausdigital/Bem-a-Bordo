<?php
define( 'SHORTINIT', true );
$path = $_SERVER['DOCUMENT_ROOT'];
// needs to channge whn passing to new server #PROBLEM
$path= "C:/xampp/apps/bemabordo/htdocs/";
//var_dump($_SERVER);
include_once $path . '/wp-load.php';
global $wpdb;
$table_name = $wpdb->prefix . 'BABP';
$people = $wpdb->get_results( 'SELECT * FROM '.$table_name.' ORDER BY `'.$table_name.'`.`'.$_POST["sortBy"].'` '.$_POST["sortDirection"].'');
//var_dump($_POST);
foreach($people as $person){
	echo '<div class="personPreview">'.$person->name.' '.$person->job.'</div>';
}
?>