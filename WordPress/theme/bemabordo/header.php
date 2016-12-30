<!doctype html>
<html>
<head>
<meta charset="utf-8">
<link rel="icon" 
      type="image/png" 
      href="<?php bloginfo('template_directory');?>/image/favicon.png">
<?php 
include_once ("include/lang_detect.php");
global $lang;
?>
<title><?php echo wp_get_document_title(); ?></title>
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory');?>/css/header.css">
<link href="https://fonts.googleapis.com/css?family=Cabin|Libre+Franklin|PT+Sans:700i" rel="stylesheet">

<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>
<body>
<div id="headerContainer">
<?php get_template_part( 'include/pageParts/part', "menu" ); ?>
</div>