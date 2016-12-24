<?php get_header();
?>
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory');?>/css/home.css">
<?php
$paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1;
$args = array( 'posts_per_page' => 40, 'paged' => $paged );
$path= get_bloginfo('template_directory');
//var_dump($paged );
$the_query = new WP_Query( $args );
?>
<div id="content">
<div id="news" class="container">
	<div id="newsContentContainer" class="contentContainer">
<div id="imageNewsContainer">
<?php if ( $the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); // run the loop 

echo'<div class="newsFloaterContainer">
					<div class="thumbnail">';
	if ( has_post_thumbnail() ) {
		echo get_the_post_thumbnail($post->ID, 'medium');
		
		//the_post_thumbnail();
	}else{
		//var_dump(bloginfo('template_directory'));
		echo '<img width="302" height="164" src="'.$path.'/image/mininews.png" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="mininews"/>';
		//$newsNoImages[]=$apost;
	}
					//echo get_the_post_thumbnail($post->ID, 'medium');
					echo '</div>
					<div class="dateNews">';
					echo get_the_date("d/m/Y");
					echo '</div>
					<div class="newsTitle"><a href="'.get_permalink().'">';
					echo get_the_title();
					echo '</a></div>
					<div class="newsText">';
					echo wpse_custom_excerpts(20);
					echo "</div></div>";


?>
<?php endwhile; ?>

<?php 
//var_dump($the_query->max_num_pages);
if ($the_query->max_num_pages > 1) { // check if the max number of pages is greater than 1  ?>
  <nav class="prev-next-posts">
    <div class="prev-posts-link">
      <?php echo get_next_posts_link( 'Older Entries', $the_query->max_num_pages ); // display older posts link ?>
    </div>
    <div class="next-posts-link">
      <?php echo get_previous_posts_link( 'Newer Entries' ); // display newer posts link ?>
    </div>
  </nav>
<?php } ?>

<?php else: ?>
  <article>
    <h1>Sorry...</h1>
    <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
  </article>
<?php endif; ?>




<?php
$myposts = get_posts( $args );

foreach ( $myposts as $post ) : setup_postdata( $post ); 
	//var_dump($post);
	$apost=array();
	$apost["permalink"]=get_permalink();
	$apost["title"]=get_the_title();
	$apost["exerpt"]=$apost["exerpt"]=wpse_custom_excerpts(20);//get_the_content();
	$apost["date"]=get_the_date("d/m/Y");
	if ( has_post_thumbnail() ) {
		$apost["image"] = get_the_post_thumbnail($post->ID, 'medium');
		
		//the_post_thumbnail();
	}else{
		//var_dump(bloginfo('template_directory'));
		$apost["image"] = '<img width="302" height="164" src="'.$path.'/image/mininews.png" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="mininews"/>';
		//$newsNoImages[]=$apost;
	}
	$newsWithImages[]=$apost;
endforeach; 
wp_reset_postdata();?>

<?php /**
				foreach($newsWithImages as $post){
					echo'<div class="newsFloaterContainer">
					<div class="thumbnail">';
					echo $post["image"];
					echo '</div>
					<div class="dateNews">';
					echo $post["date"];
					echo '</div>
					<div class="newsTitle"><a href="'.$post["permalink"].'">';
					echo $post["title"];
					echo '</a></div>
					<div class="newsText">';
					echo $post["exerpt"];
					echo "</div></div>";
				}

**/
?>
</div>
</div>
</div>
</div>
</body>
</html>