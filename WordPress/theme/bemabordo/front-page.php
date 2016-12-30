<?php get_header();
include_once ("include/lang_detect.php");
global $lang;
?>
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory');?>/css/front-page.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory');?>/js/assets/owl.carousel.css">
<script src="<?php bloginfo('template_directory');?>/js/owl.carousel.js"></script>
<script src="<?php bloginfo('template_directory');?>/js/front-page.js"></script>
<!-- <div id="background"></div> !-->
<div id="content">


<div id="home" class="container">
	<div id="carousel">
        <?php get_template_part( 'include/pageParts/part', "carousel" ); ?>
	</div>
</div>
<div id="aboutUs" class="container">
	 <?php get_template_part( 'include/pageParts/part', "aboutUs" ); ?>
</div>

<div id="mission" class="container">
	<?php get_template_part( 'include/pageParts/part', "mission" ); ?>
</div>
</div>

<div id="whatWeDo" class="container">
	<?php get_template_part( 'include/pageParts/part', "whatWeDo" ); ?>
</div>

<div id="whoWeAre" class="container">
	<?php get_template_part( 'include/pageParts/part', "whoWeAre" ); ?>
</div>

<div id="news" class="container">
	<?php get_template_part( 'include/pageParts/part', "news" ); ?>
</div>

<div id="contact" class="container"> 
	<?php get_template_part( 'include/pageParts/part', "contact" ); ?>

</div>

<div id="footer" class="container">
<footer><span id="companyName"> Bem a Bordo 2016      
<?php //echo ; ?></span> - <span id="credits">Images by Freepik</span></footer>
</div>
</div>

</div>
</body>
</html>