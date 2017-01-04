<div id="newsContentContainer" class="contentContainer">
    	<div id="newsTitle" class="titlePart"><?php echo_static_text("newsTitle") ?></div>
		
        
        
<?php
if(!is_admin()){
$newsWithImages=array();
$newsNoImages=array();
global $lang;
$args = array( 'posts_per_page' => 3 );

$myposts = get_posts( $args );
$path= get_bloginfo('template_directory');
foreach ( $myposts as $post ) : setup_postdata( $post ); 
	//var_dump($post);
	$apost=array();
	$apost["permalink"]=get_permalink();
	$apost["title"]=get_the_title();
	$apost["exerpt"]=wpse_custom_excerpts(20);
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
	?>
	
<?php endforeach; 
wp_reset_postdata();

//var_dump($newsWithImages);
//var_dump($newsNoImages);
?>
		<div id="imageNewsContainer">
        	<?php 
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
			?>
     	</div>
        
        <div id="textNewsContainer">
        
        </div>
        <?php } ?>
        
        <div id="allNewsLink"><?php if(!is_admin()) { ?><a id="clickHere" href="<?php if($lang == "pt"){ echo "noticias"; } else{ echo "en/news";}?>"><?php } echo_static_text("clickHere") ?><?php if(!is_admin()) { ?></a> <?php } echo_static_text("allNewsLink") ?></div>
    </div>