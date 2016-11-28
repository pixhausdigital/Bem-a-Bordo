<?php
global $wpdb;
$table_name = $wpdb->prefix . 'BABP';
$people = $wpdb->get_results( 'SELECT * FROM '.$table_name.' ORDER BY `'.$table_name.'`.`id` ASC');
?>