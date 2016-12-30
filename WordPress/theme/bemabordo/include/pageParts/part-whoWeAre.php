<?php global $lang; ?>
<div id="whoWeAreContentContainer" class="contentContainer">
<div id="whoWeAreTitle" class="titlePart"><?php echo_static_text("whoWeAreTitle") ?></div>
        <div id="whoWeAreText"><?php echo_static_text("whoWeAreText") ?></div>
        
    	
        	<div id="whoWeAreFloatersContainer">
        		<?php if(function_exists('BABP_getPeople') && !is_admin()){
					BABP_getPeople($lang);
}
?>        	</div>
    </div>