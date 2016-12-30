<?php get_header();
include_once ("include/lang_detect.php");
?>
<?php
if ( have_posts() ) {
	while ( have_posts() ) {
		the_post();
		?>
        <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory');?>/css/single.css">
        <div id="content" class="single">
        <div id="postContainer">
        <div class="dateNews"><?php the_time("d/m/Y") ?></div>
        <div class="newsTitle" id="post-<?php the_ID(); ?>">
<a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>">
<?php the_title(); ?></a></div>
		<div class="thumbnail"><?php if ( has_post_thumbnail() ) {
		echo get_the_post_thumbnail($post->ID, 'large ');
		
		//the_post_thumbnail();
	}else{
		//var_dump(bloginfo('template_directory'));
		echo '<img width="302" height="164" src="'.$path.'/image/mininews.png" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="mininews"/>';
		//$newsNoImages[]=$apost;
	}?></div>
		<?php
         the_content();
		//
		// Post Content here
		//
	} // end while
	?>
	<div id="buttonContainer">
	<?php
	previous_post_link('<div class="newsButton prev">%link</div>', "< &nbsp;&nbsp;&nbsp;&nbsp; Previous");
	next_post_link('<div class="newsButton next">%link</div>', "Next &nbsp;&nbsp;&nbsp;&nbsp; >");
	?>
	</div>
	<?php
} // end if

?>

<div id="allNewsLink"><a id="clickHere" href="<?php if($lang == "pt"){ echo "noticias"; } else{ echo "en/news";}?>"><?php echo_static_text("clickHere") ?></a> <?php echo_static_text("allNewsLink") ?></div>
    </div>
</div>
</div>