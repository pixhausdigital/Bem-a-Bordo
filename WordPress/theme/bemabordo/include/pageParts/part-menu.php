<header>
<div id="headerTop">
<span class="centerContainer">
<span id="logoContainer" class="logoSpan"><a href="<?php echo get_site_url(); 
if($lang == "en"){
	echo '/en/';
}
?>"> <img src="<?php bloginfo('template_directory');?>/image/logo_ball.png" width="193" height="167" alt=""/> </a></span>
<span id="floatContainer">
<span id="languageContainer">
<span id="ptContainer"><a href="<?php echo get_site_url()?>"><img src="<?php bloginfo('template_directory');?>/image/pt_active.png" width="33" height="33" alt=""/></a></span>
<span id="enContainer"><a href="<?php echo get_site_url()?>/en/"><img src="<?php bloginfo('template_directory');?>/image/en_inactive.png" width="33" height="33" alt=""/></a></span>
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
<div id="hamburgerMenuIcon"><img src="<?php bloginfo('template_directory');?>/image/menu.png" width="33" height="28" alt=""/></div>
<div id="hamburgerMenuContainer" class="menu">
<div class="menuItem" data-linkTo="home"><?php if(!is_front_page()){ echo '<a href="'.get_site_url().'/">'; } echo_static_text("homeMenu");   if(!is_front_page()){ echo '</a>';}?></div>
<div class="menuItem"  data-linkTo="aboutUs"><?php if(!is_front_page()){ echo '<a href="'.get_site_url().'/#aboutUs">'; } echo_static_text("aboutUsMenu");   if(!is_front_page()){ echo '</a>';}?></div>
<div class="menuItem"  data-linkTo="mission"><?php if(!is_front_page()){ echo '<a href="'.get_site_url().'/#mission">'; } echo_static_text("missionMenu");   if(!is_front_page()){ echo '</a>';} ?></div>
<div class="menuItem"  data-linkTo="whoWeAre"><?php if(!is_front_page()){ echo '<a href="'.get_site_url().'/#whoWeAre">'; } echo_static_text("whoWeAreMenu");   if(!is_front_page()){ echo '</a>';} ?></div>
<div class="menuItem"  data-linkTo="whatWeDo"><?php if(!is_front_page()){ echo '<a href="'.get_site_url().'/#whatWeDo">'; } echo_static_text("whatWeDoMenu");   if(!is_front_page()){ echo '</a>';} ?></div>
<div class="menuItem"  data-linkTo="news"><?php if(!is_front_page()){ echo '<a href="'.get_site_url().'/#news">'; } echo_static_text("newsMenu");   if(!is_front_page()){ echo '</a>';} ?></div>
<div id="contactMenu"  data-linkTo="contact"><?php if(!is_front_page()){ echo '<a href="'.get_site_url().'/#contact">'; } echo_static_text("contactMenu");   if(!is_front_page()){ echo '</a>';} ?></div>
</div>


<span id="menuContainer" class="menu">
<span class="menuItem" data-linkTo="home"><?php if(!is_front_page()){ echo '<a href="'.get_site_url().'/">'; } echo_static_text("homeMenu");   if(!is_front_page()){ echo '</a>';}?></span>
<span class="menuItem" data-linkTo="aboutUs"><?php if(!is_front_page()){ echo '<a href="'.get_site_url().'/#aboutUs">'; } echo_static_text("aboutUsMenu");   if(!is_front_page()){ echo '</a>';}?></span>
<span class="menuItem" data-linkTo="mission"><?php if(!is_front_page()){ echo '<a href="'.get_site_url().'/#mission">'; } echo_static_text("missionMenu");   if(!is_front_page()){ echo '</a>';} ?></span>
<span class="menuItem" data-linkTo="whoWeAre"><?php if(!is_front_page()){ echo '<a href="'.get_site_url().'/#whoWeAre">'; } echo_static_text("whoWeAreMenu");   if(!is_front_page()){ echo '</a>';} ?></span>
<span class="menuItem" data-linkTo="whatWeDo"><?php if(!is_front_page()){ echo '<a href="'.get_site_url().'/#whatWeDo">'; } echo_static_text("whatWeDoMenu");   if(!is_front_page()){ echo '</a>';} ?></span>
<span class="menuItem" data-linkTo="news"><?php if(!is_front_page()){ echo '<a href="'.get_site_url().'/#news">'; } echo_static_text("newsMenu");   if(!is_front_page()){ echo '</a>';} ?></span>
<span  class="menuItem" id="contactMenu" data-linkTo="contact"><?php if(!is_front_page()){ echo '<a href="'.get_site_url().'/#contact">'; } echo_static_text("contactMenu");   if(!is_front_page()){ echo '</a>';} ?></span>
</span>
</span>
</div>
</header>