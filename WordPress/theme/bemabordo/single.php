<?php
var_dump(have_posts());
if ( have_posts() ) {
	while ( have_posts() ) {
		the_post();
		?>
        <h2 id="post-<?php the_ID(); ?>">
<a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>">
<?php the_title(); ?></a></h2>
<small><?php the_time('F jS, Y') ?> <!-- by <?php the_author() ?> --></small>
		<?php
         the_content();
		//
		// Post Content here
		//
	} // end while
} // end if

?>