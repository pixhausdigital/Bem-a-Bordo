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
<span id="aboutUs">Sobre nós</span>
<span id="mission">Nossa Missão</span>
<span id="whoWeAre">Quem Somos</span>
<span id="whatWeDo">O que fazemos</span>
<span id="news">Atualidades</span>
<span id="contact">Contato</span>
</span>
</span>
</div>
</header>
</div>