<!doctype html>
<html>
<head>
<meta charset="utf-8">
<link rel="icon" 
      type="image/png" 
      href="<?php bloginfo('template_directory');?>/image/favicon.png">
<?php 
include_once ("include/lang_detect.php");
?>
<title><?php echo wp_get_document_title(); ?></title>
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory');?>/css/header.css">
<link href="https://fonts.googleapis.com/css?family=Cabin|Libre+Franklin|PT+Sans:700i" rel="stylesheet">

<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>
<body>
<div id="headerContainer">
<header>
<div id="headerTop">
<span class="centerContainer">
<span id="logoContainer" class="logoSpan"><img src="<?php bloginfo('template_directory');?>/image/logo_ball.png" width="193" height="193" alt=""/></span>
<span id="floatContainer">
<span id="languageContainer">
<span id="ptContainer"><img src="<?php bloginfo('template_directory');?>/image/pt_active.png" width="33" height="33" alt=""/></span>
<span id="enContainer"><img src="<?php bloginfo('template_directory');?>/image/en_inactive.png" width="33" height="33" alt=""/></span>
</span>
<span id="socialContainer">
<img src="<?php bloginfo('template_directory');?>/image/facebook.png" width="35" height="35" alt=""/>
<img src="<?php bloginfo('template_directory');?>/image/linkedin.png" width="35" height="35" alt=""/>
</span>
</span>
</span>
</div>
<div id="headerBottom">
<span class="centerContainer">

<span id="menuContainer">
<span id="homeMenu"><?php if(!is_front_page()){ echo '<a href="'.get_site_url().'/">'; } echo_static_text("homeMenu");   if(!is_front_page()){ echo '</a>';}?></span>
<span id="aboutUsMenu"><?php if(!is_front_page()){ echo '<a href="'.get_site_url().'/#aboutUs">'; } echo_static_text("aboutUsMenu");   if(!is_front_page()){ echo '</a>';}?></span>
<span id="missionMenu"><?php if(!is_front_page()){ echo '<a href="'.get_site_url().'/#mission">'; } echo_static_text("missionMenu");   if(!is_front_page()){ echo '</a>';} ?></span>
<span id="whoWeAreMenu"><?php if(!is_front_page()){ echo '<a href="'.get_site_url().'/#whoWeAre">'; } echo_static_text("whoWeAreMenu");   if(!is_front_page()){ echo '</a>';} ?></span>
<span id="whatWeDoMenu"><?php if(!is_front_page()){ echo '<a href="'.get_site_url().'/#whatWeDo">'; } echo_static_text("whatWeDoMenu");   if(!is_front_page()){ echo '</a>';} ?></span>
<span id="newsMenu"><?php if(!is_front_page()){ echo '<a href="'.get_site_url().'/#news">'; } echo_static_text("newsMenu");   if(!is_front_page()){ echo '</a>';} ?></span>
<span id="contactMenu"><?php if(!is_front_page()){ echo '<a href="'.get_site_url().'/#contact">'; } echo_static_text("contactMenu");   if(!is_front_page()){ echo '</a>';} ?></span>
</span>
</span>
</div>
</header>
</div>