<div id="contactContentContainer" class="contentContainer">
    	<div id="contactTitle" class="titlePart"><?php echo_static_text("contactTitle") ?></div>
        
        <div id="contactSubTitle" ><?php echo_static_text("contact_subtitle"); ?></div>
<div id="contactInformation" ><?php echo_static_text("contact_information"); ?></div>
<div id="contactForm">
<?php if(!is_admin()){ ?>
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
<?php }else{ ?>



<div id="messageContainer">
<div id="formFields">
<span class="field">
<span class="input" ><?php echo_static_text("contact_form_namePlaceholder"); ?></span>
</span>
<span class="field">
<span class="input" ><?php echo_static_text("contact_form_emailPlaceholder"); ?></span>
</span>
<span class="field">
<span class="input" ><?php echo_static_text("contact_form_subjectPlaceholder"); ?></span>
</span>
</div>
<div id="message">
<span class="input" ><?php echo_static_text("contact_form_messagePlaceholder"); ?></span>
</div>
<div id="formLastLine">
<span id="submitButton" ><?php echo_static_text("contact_form_submitButton"); ?></span>
<span class="clear"></span>
</div>
</div>



<?php } ?>
<div id="contactInfoForm"><?php echo_static_text("contact_form_information"); ?></div>
</div>
</div>