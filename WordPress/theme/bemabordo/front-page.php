<?php get_header();
include_once ("include/lang_detect.php");
?>
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory');?>/css/front-page.css">
<div id="background"></div>
<div id="content">
<div id="home" class="container">
	<div id="textTopLine"><?php echo_static_text("textTopLine") ?></div>
    <div id="textBottomLine"><?php echo_static_text("textBottomLine") ?></div>
    
    <div id="welcome">Bem Vindo a Bordo!</div>
</div>
<div id="aboutUs" class="container">
	<div id="aboutUsContentContainer" class="contentContainer">
    	<div id="aboutUsTitle" class="titlePart"><?php echo_static_text("aboutUsTitle") ?></div>
    
    	<div id="aboutUsText">
        <?php echo_static_text("aboutUsText") ?>
        		</div>
	</div>
</div>

<div id="mission" class="container">
	<div id="missionContentContainer" class="contentContainer">
    	<div id="missionTitle" class="titlePart"><?php echo_static_text("missionTitle") ?></div>
        
        <div id="missionSpacer"></div>
        
        <div id="missionText">
        	<?php echo_static_text("missionText") ?>

        </div>
    </div>
</div>

<div id="whatWeDo" class="container">
	<div id="whatWeDoContentContainer" class="contentContainer">
    	<div id="whatWeDoTitle" class="titlePart"><?php echo_static_text("whatWeDoTitle") ?></div>
        
        <div id="whatWeDoFloatersContainer">
        	<div id="planningFloater" class="floater">
            	<div id="planningIcon" class="floaterIcon"><img src="<?php bloginfo('template_directory');?>/image/compass.png" alt=""/></div>
                <div id="planningTitle" class="floaterTitle"><?php echo_static_text("planningTitle") ?></div>
                <div id="planningText"><?php echo_static_text("planningText") ?></div>
            </div>
            
            <div id="advisoryFloater" class="floater">
            	<div id="advisoryIcon" class="floaterIcon"><img src="<?php bloginfo('template_directory');?>/image/lighthouse.png" alt=""/></div>
                <div id="advisoryTitle" class="floaterTitle"><?php echo_static_text("advisoryTitle") ?></div>
                <div id="advisoryText"><?php echo_static_text("advisoryText") ?></div>
            </div>
            
            <div id="trainingFloater" class="floater">
            	<div id="trainingIcon" class="floaterIcon"><img src="<?php bloginfo('template_directory');?>/image/knot.png" alt=""/></div>
                <div id="trainingTitle" class="floaterTitle"><?php echo_static_text("trainingTitle") ?></div>
                <div id="trainingText"><?php echo_static_text("trainingText") ?></div>
            </div>
            
            <div id="administrationFloater" class="floater">
            	<div id="administrationIcon" class="floaterIcon"><img src="<?php bloginfo('template_directory');?>/image/cap.png" alt=""/></div>
                <div id="administrationTitle" class="floaterTitle"><?php echo_static_text("administrationTitle") ?></div>
                <div id="administrationText"><?php echo_static_text("administrationText") ?></div>
            </div>
            
              <div id="managementFloater" class="floater">
            	<div id="managementIcon" class="floaterIcon"><img src="<?php bloginfo('template_directory');?>/image/helm.png" alt=""/></div>
                <div id="managementTitle" class="floaterTitle"><?php echo_static_text("managementTitle") ?></div>
                <div id="managementText"><?php echo_static_text("managementText") ?></div>
            </div>
            
            <div id="habilitationFloater" class="floater">
            	<div id="habilitationIcon" class="floaterIcon"><img src="<?php bloginfo('template_directory');?>/image/ship.png" alt=""/></div>
                <div id="habilitationTitle" class="floaterTitle"><?php echo_static_text("habilitationTitle") ?></div>
                <div id="habilitationText"><?php echo_static_text("habilitationText") ?></div>
            </div>
            
        </div>
	</div>
</div>

<div id="whoWeAre" class="container">
	<div id="whoWeAreContentContainer" class="contentContainer">
    	<div id="whoWeAreTitle" class="titlePart"><?php echo_static_text("whoWeAreTitle") ?></div>
        
        	<div id="whoWeAreFloatersContainer">
        		<?php if(function_exists('BABP_getPeople')){
					BABP_getPeople($lang);
}
?>        	</div>
    </div>
</div>

<div id="news" class="container">
	<div id="newsContentContainer" class="contentContainer">
    	<div id="newsTitle" class="titlePart">Atualidades</div>
		
        
        
<?php

$newsWithImages=array();
$newsNoImages=array();

$args = array( 'posts_per_page' => 6 );

$myposts = get_posts( $args );
foreach ( $myposts as $post ) : setup_postdata( $post ); 
	//var_dump($post);
	$apost=array();
	$apost["permalink"]=get_permalink();
	$apost["title"]=get_the_title();
	$apost["exerpt"]=wpse_custom_excerpts(20);
	$apost["date"]=get_the_date("d/m/Y");
	if ( has_post_thumbnail() ) {
		$apost["image"] = get_the_post_thumbnail();
		$newsWithImages[]=$apost;
		//the_post_thumbnail();
	}else{
		$newsNoImages[]=$apost;
	}
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
        
        <div id="allNewsLink"><a href="">Clique aqui</a> para ir para a página de atualidades</div>
    </div>
</div>


</div>
</body>
</html>