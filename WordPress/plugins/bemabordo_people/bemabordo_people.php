<?php
/*
Plugin Name: BemABordo_people
Description: A plugin to add people to database
Version: 1.0
Author: Yuri Koster
*/

global $BABP_db_version;
$BABP_db_version = '1.0';

function BABP_install() {
	global $wpdb;
	global $BABP_db_version;

	$table_name = $wpdb->prefix . 'BABP';
	
	$charset_collate = $wpdb->get_charset_collate();

	$sql = "CREATE TABLE $table_name (
		id mediumint(9) NOT NULL AUTO_INCREMENT,
		time datetime DEFAULT '0000-00-00 00:00:00' NOT NULL,
		name tinytext NOT NULL,
		job tinytext NOT NULL,
		text text NOT NULL,
		facebook varchar(55) DEFAULT '' NOT NULL,
		linkedin varchar(55) DEFAULT '' NOT NULL,
		image varchar(500) DEFAULT '' NOT NULL,
		PRIMARY KEY  (id)
	) $charset_collate;";

	require_once( ABSPATH . 'wp-admin/includes/upgrade.php' );
	dbDelta( $sql );

	update_option ( 'BABP_db_version', $BABP_db_version );
}

function BABP_install_data() {
	global $wpdb;
	
	$welcome_name = 'Mr. WordPress';
	$welcome_job = 'a Job Title';
	$welcome_facebook = 'https://www.facebook.com/';
	$welcome_linkedin = 'https://www.linkedin.com/';
	$welcome_text = 'Congratulations, you just completed the installation!';
	$welcome_image='';
	
	$table_name = $wpdb->prefix . 'BABP';
	
	$wpdb->insert( 
		$table_name, 
		array( 
			'time' => current_time( 'mysql' ), 
			'name' => $welcome_name, 
			'job' => $welcome_job, 
			'facebook' => $welcome_facebook, 
			'linkedin' => $welcome_linkedin, 
			'text' => $welcome_text, 
			'image' => $welcome_image, 
		) 
	);
}

/** Step 2 (from text above). */
add_action( 'admin_menu', 'my_plugin_menu' );

/** Step 1. */
function my_plugin_menu() {
	//add_options_page( 'People', 'People', 'manage_options', 'BABP', 'my_plugin_options' );
	// Add a new top-level menu (ill-advised):
    add_menu_page(__('People(BAB)','menu-test'), __('People(BAB)','menu-test'), 'manage_options', 'BAB_People', 'mt_toplevel_page' );

    // Add a submenu to the custom top-level menu:
    add_submenu_page('BAB_People', __('Add Person','menu-test'), __('Add Person','menu-test'), 'manage_options', 'Add_People', 'mt_sublevel_page');

    // Add a second submenu to the custom top-level menu:
    add_submenu_page('BAB_People', __('Delete Person','menu-test'), __('Delete Person','menu-test'), 'manage_options', 'Delete_People', 'mt_sublevel_page2');
}


// mt_toplevel_page() displays the page content for the custom Test Toplevel menu
function mt_toplevel_page() {
	global $wpdb;
	
	if ( !current_user_can( 'manage_options' ) )  {
		wp_die( __( 'You do not have sufficient permissions to access this page.' ) );
	}
	$table_name = $wpdb->prefix . 'BABP';
	$people = $wpdb->get_results( 'SELECT * FROM '.$table_name);
    echo "<h2>" . __( 'Test Toplevel', 'menu-test' ) . '</h2> <a href="?page=Add_People" class="page-title-action">Add New</a>';
	echo "<table>";
	echo"<thead><tr><td>ID</td><td>Name</td><td>job</td><td>text</td><td>facebook</td><td>linkedin</td><td>image</td><td>actions</td></tr></thead><tbody>";
	foreach($people as $person){
		echo "<tr>";
		echo "<td>".$person->id."</td>";
		echo "<td>".$person->name."</td>";
		echo "<td>".$person->job."</td>";
		echo "<td>".$person->text."</td>";
		echo "<td>".$person->facebook."</td>";
		echo "<td>".$person->linkedin."</td>";
		echo "<td>".$person->image."</td>";
		echo "<td> <a href='?page=Add_People&mode=edit&id=".$person->id."'>Edit</a> <a href='?page=Delete_People&id=".$person->id."'>Delete</a></td>";
		echo "</tr>";
	}
	echo "</tbody></table>";
}

// mt_sublevel_page() displays the page content for the first submenu
// of the custom Test Toplevel menu
function mt_sublevel_page() {
	//var_dump($_GET);
	if ( !current_user_can( 'manage_options' ) )  {
		wp_die( __( 'You do not have sufficient permissions to access this page.' ) );
	}
    global $wpdb;
	
	if($_GET["mode"] == "edit"){
		$table_name = $wpdb->prefix . 'BABP';
		$people = $wpdb->get_results( 'SELECT * FROM '.$table_name." WHERE id='".$_GET["id"]."'");
		foreach($people as $person){
			$id=$person->id;
			$name=$person->name;
			$job=$person->job;
			$text=$person->text;
			$facebook=$person->facebook;
			$linkedin=$person->linkedin;
			$image=$person->image;
			$attachment = $wpdb->get_col($wpdb->prepare("SELECT ID FROM $wpdb->posts WHERE guid='%s';", $image ));
			$imageID=$attachment[0];
		}
	}
	
	//var_dump();
	wp_enqueue_media();
	
	echo "<h2>" . __( 'Add Person', 'menu-test' ) . "</h2>";
	 if ( $_SERVER["REQUEST_METHOD"] == "POST" ){
            print "do stuff";
			
			
			$table_name = $wpdb->prefix . 'BABP';
	
			
			$wpdb->replace( 
				$table_name, 
				array( 
					'time' => current_time( 'mysql' ), 
					'id' => $_POST["id"], 
					'name' => $_POST["name"], 
					'job' => $_POST["job"], 
					'facebook' => $_POST["facebook"], 
					'linkedin' => $_POST["linkedin"], 
					'text' => $_POST["text"], 
					'image' => wp_get_attachment_url($_POST["image"]), 
				) 
			);
			
    } else {
		?>
		<form method="post" action='<?php echo $_SERVER['REQUEST_URI'] ?>' enctype="multipart/form-data">
        <input type='hidden' name='id' value='<?php if(isset($id)){echo $id;} ?>'>
		<label for="name">Name:</label><input type="text" name="name" <?php if(isset($name)){ echo "value='$name'";} ?> /><br>
		<label for="job">job:</label><input type="text" name="job" <?php if(isset($job)){ echo "value='$job'";} ?>/><br>
		<label for="facebook">facebook:</label><input type="text" name="facebook" <?php if(isset($facebook)){ echo "value='$facebook'";} ?>/><br>
		<label for="linkedin">linkedin:</label><input type="text" name="linkedin" <?php if(isset($linkedin)){ echo "value='$linkedin'";} ?>/><br>
		<label for="text">text:</label><textarea name="text"><?php if(isset($text)){ echo $text;} ?></textarea><br>
		<div class='image-preview-wrapper'>
			<img id='image-preview' src='<?php echo $image; ?>' height='100'>
		</div>
		<input id="upload_image_button" type="button" class="button" value="<?php _e( 'Upload image' ); ?>" />
		<input type='hidden' name='image' id='image_attachment_id' value='<?php if(isset($imageID)){echo  $imageID;} ?>'>
		<input type="submit" name="submit_image_selector" value="Save" class="button-primary">
        </form>
<?php
		//echo '<input type="submit" />';
	}
}

// mt_sublevel_page2() displays the page content for the second submenu
// of the custom Test Toplevel menu
function mt_sublevel_page2() {
	if ( !current_user_can( 'manage_options' ) )  {
		wp_die( __( 'You do not have sufficient permissions to access this page.' ) );
	}
    echo "<h2>" . __( 'Test Sublevel2', 'menu-test' ) . "</h2>";
	global $wpdb;
	if(isset($_GET["id"])){
		$table_name = $wpdb->prefix . 'BABP';
		$people = $wpdb->get_results( 'SELECT * FROM '.$table_name." WHERE id='".$_GET["id"]."'");
		foreach($people as $person){
			$id=$person->id;
			$name=$person->name;
			$job=$person->job;
			$text=$person->text;
			$facebook=$person->facebook;
			$linkedin=$person->linkedin;
			$image=$person->image;
			$attachment = $wpdb->get_col($wpdb->prepare("SELECT ID FROM $wpdb->posts WHERE guid='%s';", $image ));
			$imageID=$attachment[0];
		}
	}
	
	if ( $_SERVER["REQUEST_METHOD"] == "POST" ){
		//var_dump($_POST);
		if($_POST["agree"] == "true"){
			$table_name = $wpdb->prefix . 'BABP';
			$wpdb->delete( $table_name, array( 'ID' => $_POST["id"] ) );
			echo "Deleted";
		}
		
	}else{
	if(isset($_GET["id"])){
	?>
    <form method="post" action='<?php echo $_SERVER['REQUEST_URI'] ?>' enctype="multipart/form-data">
        <input type='hidden' name='id' value='<?php if(isset($_GET["id"])){echo $_GET["id"];} ?>'>
        <div id="person1" class="person">
            		<span class="personPhoto"><img src="<?php echo $image; ?>" alt=""/></span>
                    <span class="personText">
                    	<span class="personSocialContainer"><a href="<?php echo $facebook; ?>"><img src="<?php bloginfo('template_directory');?>/image/weAreFacebook.png" alt=""/></a><a href="<?php echo $linkedin; ?>"><img src="<?php bloginfo('template_directory');?>/image/weAreLinkedin.png" alt=""/></a></span>
                    	<div class="personName"><?php echo $name; ?></div>
                        <div class="personJob"><?php echo $job; ?></div>
                        </span>
                        <div class="personDescription"><?php echo $text; ?></div>
                    
        </div>
        <input type="checkbox" name="agree" value="true"> Are you sure you wish to delete this person?<br>
        <input type="submit" name="submit_image_selector" value="Delete" class="button-primary">
    </form>
    <?php
	}else{
		echo "No Person Selected";
	}
	}
}

register_activation_hook( __FILE__, 'BABP_install' );
register_activation_hook( __FILE__, 'BABP_install_data' );




function BABP_getPeople(){
	global $wpdb;
	
	$table_name = $wpdb->prefix . 'BABP';
	$people = $wpdb->get_results( 'SELECT * FROM '.$table_name);
	foreach($people as $person){?>
		
        <div id="person<?php echo $person->id; ?>" class="person">
            		<span class="personPhoto"><img src="<?php echo $person->image; ?>" alt=""/></span>
                    <span class="personText">
                    	<span class="personSocialContainer"><a href="<?php echo $person->facebook; ?>"><img src="<?php bloginfo('template_directory');?>/image/weAreFacebook.png" alt=""/></a><a href="<?php echo $person->linkedin; ?>"><img src="<?php bloginfo('template_directory');?>/image/weAreLinkedin.png" alt=""/></a></span>
                    	<div class="personName"><?php echo $person->name; ?></div>
                        <div class="personJob"><?php echo $person->job; ?></div>
                        </span>
                        <div class="personDescription"><?php echo $person->text; ?></div>
                    
        </div>
	
    
    <?php
	}
	//echo "people";
}

add_action('wp_enqueue_scripts','BABP_enqueue');

function BABP_enqueue() {
	//wp_enqueue_script( 'jquery' );
		
	wp_enqueue_script('newscript',plugins_url( 'image.js' , __FILE__ ),array( 'jquery' ));
	wp_register_style( 'BABP-style', plugins_url('BABP.css', __FILE__) );
	wp_enqueue_style( 'BABP-style' );
}


add_action( 'admin_footer', 'media_selector_print_scripts' );

function media_selector_print_scripts() {

	//$my_saved_attachment_post_id = get_option( 'media_selector_attachment_id', 0 );

	?><script type='text/javascript'>

		jQuery( document ).ready( function( $ ) {

			// Uploading files
			var file_frame;
			var wp_media_post_id = wp.media.model.settings.post.id; // Store the old id
			//var set_to_post_id = <?php echo $my_saved_attachment_post_id; ?>; // Set this

			jQuery('#upload_image_button').on('click', function( event ){

				event.preventDefault();

				// If the media frame already exists, reopen it.
				if ( file_frame ) {
					// Set the post ID to what we want
					file_frame.uploader.uploader.param( 'post_id', set_to_post_id );
					// Open frame
					file_frame.open();
					return;
				} else {
					// Set the wp.media post id so the uploader grabs the ID we want when initialised
					//wp.media.model.settings.post.id = set_to_post_id;
				}

				// Create the media frame.
				file_frame = wp.media.frames.file_frame = wp.media({
					title: 'Select a image to upload',
					button: {
						text: 'Use this image',
					},
					multiple: false	// Set to true to allow multiple files to be selected
				});

				// When an image is selected, run a callback.
				file_frame.on( 'select', function() {
					// We set multiple to false so only get one image from the uploader
					attachment = file_frame.state().get('selection').first().toJSON();

					// Do something with attachment.id and/or attachment.url here
					$( '#image-preview' ).attr( 'src', attachment.url ).css( 'width', 'auto' );
					$( '#image_attachment_id' ).val( attachment.id );

					// Restore the main post ID
					wp.media.model.settings.post.id = wp_media_post_id;
				});

					// Finally, open the modal
					file_frame.open();
			});

			// Restore the main ID when the add media button is pressed
			jQuery( 'a.add_media' ).on( 'click', function() {
				wp.media.model.settings.post.id = wp_media_post_id;
			});
		});

	</script><?php

}

?>