<?php get_header();
include_once ("include/lang_detect.php");
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
        <div class="carouselImageContainer"><img src="<?php echo getCarrouselImage("1"); ?>" width="1067" height="600" alt=""/>
        <div class="imageText">    
   		 <div class="welcome"><?php echo_static_text("welcome") ?></div>
    </div>
    <div class="imageOverlay"></div>
        </div>
  <div class="carouselImageContainer"><img src="<?php echo getCarrouselImage("2"); ?>" width="900" height="600" alt=""/><div class="imageText"></div><div class="imageOverlay"></div></div>
  <div class="carouselImageContainer"><img src="<?php echo getCarrouselImage("3"); ?>" width="859" height="600" alt=""/><div class="imageText"></div><div class="imageOverlay"></div></div>
  <div class="carouselImageContainer"><img src="<?php echo get_bloginfo('template_directory'); ?>/image/carousel3.jpg" width="900" height="600" alt=""/><div class="imageText"></div><div class="imageOverlay"></div></div>
  <div class="carouselImageContainer"><img src="<?php echo get_bloginfo('template_directory'); ?>/image/carousel4.jpg" width="900" height="600" alt=""/><div class="imageText"></div><div class="imageOverlay"></div></div>
  <div class="carouselImageContainer"><img src="<?php echo get_bloginfo('template_directory'); ?>/image/carousel5.jpg" width="899" height="600" alt=""/><div class="imageText"></div><div class="imageOverlay"></div></div>
  <div class="carouselImageContainer"><img src="<?php echo get_bloginfo('template_directory'); ?>/image/carousel6.jpg" width="900" height="600" alt=""/><div class="imageText"></div><div class="imageOverlay"></div></div>
  <div class="carouselImageContainer"><img src="<?php echo get_bloginfo('template_directory'); ?>/image/carousel7.jpg" width="900" height="600" alt=""/><div class="imageText"></div><div class="imageOverlay"></div></div>
  <div class="carouselImageContainer"><img src="<?php echo get_bloginfo('template_directory'); ?>/image/carousel8.jpg" width="900" height="600" alt=""/><div class="imageText"></div><div class="imageOverlay"></div></div>
  <div class="carouselImageContainer"><img src="<?php echo get_bloginfo('template_directory'); ?>/image/carousel9.jpg" width="900" height="600" alt=""/><div class="imageText"></div><div class="imageOverlay"></div></div>
  <div class="carouselImageContainer"><img src="<?php echo get_bloginfo('template_directory'); ?>/image/carousel10.jpg" width="900" height="600" alt=""/><div class="imageText"></div><div class="imageOverlay"></div></div>
  <div class="carouselImageContainer"><img src="<?php echo get_bloginfo('template_directory'); ?>/image/carousel11.jpg" width="900" height="600" alt=""/><div class="imageText"></div><div class="imageOverlay"></div></div>
  <div class="carouselImageContainer"><img src="<?php echo get_bloginfo('template_directory'); ?>/image/carousel12.jpg" width="900" height="600" alt=""/><div class="imageText"></div><div class="imageOverlay"></div></div>
	</div>
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
        <div id="missionTextContainer">
        <div id="missionText">
        <div id="missionTitle" class="titlePart"><?php echo_static_text("missionTitle") ?></div>
        	<?php echo_static_text("missionText") ?>
			
        </div>
        <div id="visionText">
        <div id="visionTitle" class="titlePart"><?php echo_static_text("visionTitle") ?></div>
        	<?php echo_static_text("visionText") ?>
        </div>
        <div id="valuesText">
        <div id="valuesTitle" class="titlePart"><?php echo_static_text("valuesTitle") ?></div>
        	<?php echo_static_text("valuesText") ?>
        </div>
    </div>
</div>
</div>

<div id="whatWeDo" class="container">
	<div id="whatWeDoContentContainer" class="contentContainer">
    	<div id="whatWeDoTitle" class="titlePart"><?php echo_static_text("whatWeDoTitle") ?></div>
        
        <div id="whatWeDoFloatersContainer">
        	
            <div id="consultingFloater" class="floater">
            	<div id="consultingIcon" class="floaterIcon"><img src="<?php bloginfo('template_directory');?>/image/compass.png" alt=""/></div>
                <div id="consultingTextContainer" class="weDoTextContainer">
                <div id="consultingTitle" class="floaterTitle"> <?php echo_static_text("consultingTitle") ?></div>
                <div id="consultingText"><?php echo_static_text("consultingText") ?>
                
                </div>
                </div>
            </div>
            
            <div id="sustainabilityFloater" class="floater">
            	<div id="sustainabilityIcon" class="floaterIcon"><img src="<?php bloginfo('template_directory');?>/image/lighthouse.png" alt=""/></div>
                <div id="sustainabilityTextContainer" class="weDoTextContainer">
                <div id="sustainabilityTitle" class="floaterTitle"><?php echo_static_text("sustainabilityTitle") ?></div>
                <div id="sustainabilityText"><?php echo_static_text("sustainabilityText") ?>
               
                </div>
                </div>
            </div>
            
            <div id="corporateGovernanceFloater" class="floater">
            	<div id="corporateGovernanceIcon" class="floaterIcon"><img src="<?php bloginfo('template_directory');?>/image/cap.png" alt=""/></div>
                <div id="corporateGovernanceTextContainer" class="weDoTextContainer">
                <div id="corporateGovernanceTitle" class="floaterTitle"> <?php echo_static_text("corporateGovernanceTitle") ?></div>
                <div id="corporateGovernanceText"><?php echo_static_text("corporateGovernanceText") ?>
               
                </div>
                </div>
            </div>
            
            <div id="trainingFloater" class="floater">
            	<div id="trainingIcon" class="floaterIcon"><img src="<?php bloginfo('template_directory');?>/image/knot.png" alt=""/></div>
                <div id="trainingTextContainer" class="weDoTextContainer">
                <div id="trainingTitle" class="floaterTitle"><?php echo_static_text("trainingTitle") ?></div>
                <div id="trainingText"><?php echo_static_text("trainingText") ?>
                
                </div>
                </div>
            </div>
            
            <div id="reportsFloater" class="floater">
            	<div id="reportsIcon" class="floaterIcon"><img src="<?php bloginfo('template_directory');?>/image/helm.png" alt=""/></div>
                <div id="reportsTextContainer" class="weDoTextContainer">
                <div id="reportsTitle" class="floaterTitle"><?php echo_static_text("reportsTitle") ?></div>
                <div id="reportsText"><?php echo_static_text("reportsText") ?>
                
                </div>
                </div>
            </div>
            
            
        </div>
	</div>
</div>

<div id="whoWeAre" class="container">
	<div id="whoWeAreContentContainer" class="contentContainer">
    	<div id="whoWeAreTitle" class="titlePart"><?php echo_static_text("whoWeAreTitle") ?></div>
        <div id="whoWeAreText"><?php echo_static_text("whoWeAreText") ?></div>
        	<div id="whoWeAreFloatersContainer">
        		<?php if(function_exists('BABP_getPeople')){
					BABP_getPeople($lang);
}
?>        	</div>
    </div>
</div>

<div id="news" class="container">
	<div id="newsContentContainer" class="contentContainer">
    	<div id="newsTitle" class="titlePart"><?php echo_static_text("newsTitle") ?></div>
		
        
        
<?php

$newsWithImages=array();
$newsNoImages=array();

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
        
        <div id="allNewsLink"><a id="clickHere" href="<?php if($lang == "pt"){ echo "noticias"; } else{ echo "en/news";}?>"><?php echo_static_text("clickHere") ?></a> <?php echo_static_text("allNewsLink") ?></div>
    </div>
</div>

<div id="contact" class="container"> 
	<div id="contactContentContainer" class="contentContainer">
    	<div id="contactTitle" class="titlePart"><?php echo_static_text("contactTitle") ?></div>
        
        <div id="contactSubTitle" ><?php echo_static_text("contact_subtitle"); ?></div>
<div id="contactInformation" ><?php echo_static_text("contact_information"); ?></div>
<div id="contactForm">
<form method="post" id="mailForm">
<div id="messageContainer">
<div id="formFields">
<span class="field">
<input type="text" name="name" placeholder="<?php echo_static_text("contact_form_namePlaceholder"); ?>"
<?php if(isset($_POST["name"])){ echo 'value="'.$_POST["name"].'" ';}?>
 />
</span>
<span class="field">
<input type="email" name="email" placeholder="<?php echo_static_text("contact_form_emailPlaceholder"); ?>"
<?php if(isset($_POST["email"])){ echo 'value="'.$_POST["email"].'" ';}?>
/>
</span>
<span class="field">
<input type="text" name="subject" placeholder="<?php echo_static_text("contact_form_subjectPlaceholder"); ?>" 
<?php if(isset($_POST["subject"])){ echo 'value="'.$_POST["subject"].'" ';}?>
/>
</span>
</div>
<div id="message">
<textarea name="message" placeholder="<?php echo_static_text("contact_form_messagePlaceholder"); ?>"><?php if(isset($_POST["message"])){ echo 'value="'.$_POST["message"].'" ';}?></textarea>
</div>
<div id="formLastLine">
<button id="submitButton" type="button"><?php echo_static_text("contact_form_submitButton"); ?></button>
<span class="clear"></span>
</div>
</div>

</form>
<div id="contactInfoForm"><?php echo_static_text("contact_form_information"); ?></div>
</div>
</div>

	</div>
    <div id="footer" class="container">
<footer><span id="companyName"> Bem a Bordo 2016      
<?php //echo ; ?></span> - <span id="credits">Images by Freepik</span></footer>
</div>
</div>

</div>
</body>
</html>