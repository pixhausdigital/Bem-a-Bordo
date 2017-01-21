<?php
function bab_toplevel_page() {
	echo "page";
	global $wpdb;
	$containerArray=array();
	$table_name = $wpdb->prefix . 'BAB_StaticText';
	
	 if ( $_SERVER["REQUEST_METHOD"] == "POST" ){
		//var_dump($_POST);
		foreach($_POST as $id => $text){
			if($id !== "save"){
				if( strpos($id, '_text') !== false){
					$splitArr=(explode("_",$id));
					$nameId=$splitArr[0];
					$$nameId[$splitArr[1]."_".$splitArr[2]]=$text;
					if(count($$nameId)>1){
						$response[$nameId]=	$$nameId;
					}
				}else{
					$response[$id]=	array(
						'text_pt' => $text["text_pt"],
						'text_en' => $text["text_en"]
					);
				}
			/** **/
			}
			else{
			//var_dump($id);
			}
		}
		foreach($response as $id => $text){
			
			$wpdb->update( 
					$table_name, 
					array(
						'text_pt' => htmlentities($text["text_pt"]),
						'text_en' => htmlentities($text["text_en"])
					), array( 
						'id' => $id
					)
				);
		}
		//var_dump($response);
	 }
	 $results = $wpdb->get_results( 'SELECT * FROM '.$table_name." ORDER BY `".$table_name."`.`container` ASC, `subID` ASC",ARRAY_A );
	echo'<form method="post" action="'.$_SERVER['REQUEST_URI'].'" enctype="multipart/form-data">';
	?>
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory');?>/css/header.css">
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory');?>/css/front-page.css">
     <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory');?>/css/adminMenu/BAB.css">
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
	 <script src="<?php bloginfo('template_directory');?>/js/adminMenu/static.js"></script>
    <?php
	$settings = array( 'media_buttons' => false, 'teeny' => true, 'wpautop' => true );
	foreach($results as $text){
		//return ($text["text_".$lang]);
		if(!in_array($text["container"],$containerArray)){
			$containerArray[]=$text["container"];
			$containerNameArray=explode("_", $text["container"]);
			$containerName=$containerNameArray[1];
			?>
            <div id="<?php echo $containerName; ?>container">
            	<?php
					global $lang;
					$lang="pt";
					get_template_part( 'include/pageParts/part', $containerName );
				?>
            </div>
            <?php
		}
		if($text["textClass"]=="simple"){
		?>
        <label for="<?php echo $text["id"] ?>"><?php echo $text["id"] ?></label><input type="text" name="<?php echo $text["id"]."[text_pt]" ?>" value="<?php echo $text["text_pt"] ?>"><input type="text" name="<?php echo $text["id"]."[text_en]" ?>" value="<?php echo $text["text_en"] ?>"> <br>
        <?php } else{
			?>
			<label for="<?php echo $text["id"] ?>"><?php echo $text["id"] ?></label><br>
            <span class="richEditor">
			<?php
				wp_editor( html_entity_decode($text["text_pt"]), $text["id"]."_text_pt", $settings );?>
                </span><span class="richEditor">
                <?php
				wp_editor( html_entity_decode($text["text_en"]), $text["id"]."_text_en", $settings );?>
				</span>
                <?php
		}
	}
	echo'<button type="submit" name="save">Save</button>';
	echo "</form>";
}


function babp_toplevel_page() {
	global $wpdb;
	
	if ( !current_user_can( 'manage_options' ) )  {
		wp_die( __( 'You do not have sufficient permissions to access this page.' ) );
	}
	$table_name = $wpdb->prefix . 'BABP';
	$people = $wpdb->get_results( 'SELECT * FROM '.$table_name);
	if($_REQUEST["action"] == NULL){
		//var_dump($_REQUEST);
	
	$testListTable = new TT_Example_List_Table();
    //Fetch, prepare, sort, and filter our data...
    $testListTable->prepare_items();
	 echo "<h2>" . __( 'People (Bem a Bordo People Plugin)', 'BAB-people-menu' ) . '</h2> <a href="?page='.$_REQUEST['page'].'&action=add" class="page-title-action">Add New</a>';
	?>
	 <form id="movies-filter" method="get">
            <!-- For plugins, we also need to ensure that the form posts back to our current page -->
            <input type="hidden" name="page" value="<?php echo $_REQUEST['page'] ?>" />
            <!-- Now we can render the completed list table -->
            <?php $testListTable->display() ?>
        </form>
    
	<?php
	}
	
if($_REQUEST["action"] == "edit" || $_REQUEST["action"] == "add"){
	global $wpdb;
	?><script src="<?php bloginfo('template_directory') ?>/js/adminMenu/image.js"></script>
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory')?>/css/adminMenu/BABP.css">
    <?php
	if($_REQUEST["action"] == "edit"){
		$table_name = $wpdb->prefix . 'BABP';
		$people = $wpdb->get_results( 'SELECT * FROM '.$table_name." WHERE id='".$_REQUEST["id"]."'");
		foreach($people as $person){
			$id=$person->id;
			$manual=$person->manual;
			$name=$person->name;
			$job=$person->job;
			$text=$person->text;
			$job_en=$person->job_en;
			$text_en=$person->text_en;
			$facebook=$person->facebook;
			$linkedin=$person->linkedin;
			$image=$person->image;
			//if done from 2 diferrent domains causes errors
			$attachment = $wpdb->get_col($wpdb->prepare("SELECT ID FROM $wpdb->posts WHERE guid='%s';", site_url().$image ));
			$imageID=$attachment[0];
			//var_dump($attachment);
			//var_dump(site_url().$image);
		}
	}else{
		$table_name = $wpdb->prefix . 'BABP';
		$count_query = "select count(*) from $table_name";
    	$manual = $wpdb->get_var($count_query)+1;
	}
	
	//var_dump();
	wp_enqueue_media();
	
	echo "<h2>" . __( 'Add Person', 'menu-test' ) . "</h2>";
	 if ( $_SERVER["REQUEST_METHOD"] == "POST" ){
           echo $_POST["name"]." Added <br>";
		   echo '<a href="?page='.$_REQUEST['page'].'&action=add" class="page-title-action">Add New</a> <br>';
		   echo '<a href="?page='.$_REQUEST['page'].'" class="page-title-action">Go Back</a>';
			
			if($_POST["image"] == ""){
				$url = get_template_directory_uri()."/image/adminMenu/person.png";
				$urllocal = explode(site_url(), $url);
				$image = $urllocal[1];
			}else{
				$url = 	wp_get_attachment_url($_POST["image"]);
				$urllocal = explode(site_url(), $url);
				$image = $urllocal[1];
				//var_dump($urllocal);
			}
			$table_name = $wpdb->prefix . 'BABP';
			$wpdb->replace( 
				$table_name, 
				array( 
					'time' => current_time( 'mysql' ), 
					'id' => $_POST["id"],
					'manual' => $_POST["manual"], 
					'name' => $_POST["name"], 
					'job' => $_POST["job"], 
					'job_en' => $_POST["job_en"],
					'text_en' => $_POST["text_en"],  
					'facebook' => $_POST["facebook"], 
					'linkedin' => $_POST["linkedin"], 
					'text' => $_POST["text"], 
					'image' => $image, 
				) 
			);
			
    } else {
		?>
		<form method="post" action='<?php echo $_SERVER['REQUEST_URI'] ?>' enctype="multipart/form-data">
        <input type='hidden' name='id' value='<?php if(isset($id)){echo $id;} ?>'>
        <input type='hidden' name='manual' value='<?php if(isset($manual)){echo $manual;} ?>'>
         <label for="image">Image:</label>
		<div class='image-preview-wrapper'>
			<img id='image-preview' src='<?php if(isset($image)){ echo site_url().$image; } else{ echo bloginfo('template_directory')."/image/adminMenu/person.png"; } ?>' height='100'>
		</div>
		<input id="upload_image_button" type="button" class="button" value="<?php _e( 'Upload image' ); ?>" /><br>
		<label for="name">Name:</label><input type="text" class="personInput" name="name" <?php if(isset($name)){ echo "value='$name'";} ?> /><br>
		<label for="job">job:</label><input type="text" class="personInput" name="job" <?php if(isset($job)){ echo "value='$job'";} ?>/>
        <label for="job_en">job in english:</label><input type="text" class="personInput" name="job_en" <?php if(isset($job_en)){ echo "value='$job_en'";} ?>/><br>
		<label for="facebook">facebook:</label><input type="text" class="personInput" name="facebook" <?php if(isset($facebook)){ echo "value='$facebook'";} ?>/><br>
		<label for="linkedin">linkedin:</label><input type="text" class="personInput" name="linkedin" <?php if(isset($linkedin)){ echo "value='$linkedin'";} ?>/><br>
		<label for="text">text:</label><textarea class="personInput" name="text"><?php if(isset($text)){ echo $text;} ?></textarea>
        <label for="text_en">text in english:</label><textarea class="personInput" name="text_en"><?php if(isset($text_en)){ echo $text_en;} ?></textarea><br>
		<input type='hidden' name='image' id='image_attachment_id' value='<?php if(isset($imageID)){echo  $imageID;} ?>'>
		<input type="submit" name="submit_image_selector" value="Save" class="button-primary">
        </form>
<?php
		//echo '<input type="submit" />';
	}
}

if($_REQUEST["action"] == "delete"){
	
	echo "<h2>" . __( 'Delete Person', 'menu-test' ) . "</h2>";
	global $wpdb;
	echo '<link rel="stylesheet" type="text/css" href="'.get_template_directory_uri()."/css/adminMenu/BABP.css".'">';
    
	if(isset($_GET["id"])){
		$table_name = $wpdb->prefix . 'BABP';
		$people = $wpdb->get_results( 'SELECT * FROM '.$table_name." WHERE id='".$_GET["id"]."'");
		foreach($people as $person){
			$id=$person->id;
			$name=$person->name;
			$job=$person->job;
			$text=$person->text;
			$job_en=$person->job_en;
			$text_en=$person->text_en;
			$facebook=$person->facebook;
			$linkedin=$person->linkedin;
			$image=$person->image;
			$attachment = $wpdb->get_col($wpdb->prepare("SELECT ID FROM $wpdb->posts WHERE guid='%s';", $image ));
			$imageID=$attachment[0];
		}
	}
	
	if ( $_SERVER["REQUEST_METHOD"] == "POST" && $_POST["agree"] == "true" ){
		//var_dump($_POST);
		//if($_POST["agree"] == "true"){
			$table_name = $wpdb->prefix . 'BABP';
			$wpdb->delete( $table_name, array( 'ID' => $_POST["id"] ) );
			echo "Deleted<br>";
			echo '<a href="?page='.$_REQUEST['page'].'" class="page-title-action">Go Back</a>';
		//}
		
	}else{
	if(isset($_GET["id"])){
	?>
    <form method="post" action='<?php echo $_SERVER['REQUEST_URI'] ?>' enctype="multipart/form-data">
        <input type='hidden' name='id' value='<?php if(isset($_GET["id"])){echo $_GET["id"];} ?>'>
        <span class="language">Portuguese:</span>
        <div id="person1" class="person">
            		<span class="personPhoto"><img src="<?php echo site_url().$image; ?>" alt=""/></span>
                    <span class="personText">
                    	<span class="personSocialContainer"><a href="<?php echo $facebook; ?>"><img src="<?php bloginfo('template_directory');?>/image/weAreFacebook.png" alt=""/></a><a href="<?php echo $linkedin; ?>"><img src="<?php bloginfo('template_directory');?>/image/weAreLinkedin.png" alt=""/></a></span>
                    	<div class="personName"><?php echo $name; ?></div>
                        <div class="personJob"><?php echo $job; ?></div>
                        </span>
                        <div class="personDescription"><?php echo $text; ?></div>
                    
        </div>
        <span class="language">English:</span>
        <div id="person_en" class="person">
            		<span class="personPhoto"><img src="<?php echo site_url().$image; ?>" alt=""/></span>
                    <span class="personText">
                    	<span class="personSocialContainer"><a href="<?php echo $facebook; ?>"><img src="<?php bloginfo('template_directory');?>/image/weAreFacebook.png" alt=""/></a><a href="<?php echo $linkedin; ?>"><img src="<?php bloginfo('template_directory');?>/image/weAreLinkedin.png" alt=""/></a></span>
                    	<div class="personName"><?php echo $name; ?></div>
                        <div class="personJob"><?php echo $job_en; ?></div>
                        </span>
                        <div class="personDescription"><?php echo $text_en; ?></div>
                    
        </div>
        <div>
        <input type="checkbox" name="agree" value="true"> Are you sure you wish to delete this person?<br>
        <input type="submit" name="submit_image_selector" value="Delete" class="button-primary">
        </div>
    </form>
    <?php
	}else{
		echo "No Person Selected";
	}
	}
	
	
	}

}


function babp_options_page() {
	//var_dump($_GET);
	if ( !current_user_can( 'manage_options' ) )  {
		wp_die( __( 'You do not have sufficient permissions to access this page.' ) );
	}
    global $wpdb;
	echo '<link rel="stylesheet" type="text/css" href="'.get_template_directory_uri()."/css/adminMenu/BABP.css".'">';
	echo "<h2>" . __( 'Options', 'BAB-people-menu' ) . "</h2>";
	
	if($_SERVER["REQUEST_METHOD"] == "POST" ){
		
		//var_dump($_POST);
		update_option('BABP_sortBy', $_POST["sortBy"]);
		update_option('BABP_sortDirection', $_POST["sortDirection"]);
		if($_POST["sortBy"] == "manual"){
			$sortString= str_replace ("sort=", "",$_POST["sortArray"]);
			$sortArray= explode('&', $sortString);
			$manualSort=array();
			foreach($sortArray as $id => $manual){
					$manualSort[$id]=$manual;
			}
			foreach($manualSort as $manual => $id){
				$table_name = $wpdb->prefix . 'BABP';
				$wpdb->update( 
					$table_name, 
					array(
						'manual' => $manual
					), array( 
						'id' => $id
					)
				);
				
			}
			//var_dump($manualSort);
		}
	}

	$sortBy = get_option( 'BABP_sortBy');
	$sortDirection = get_option( 'BABP_sortDirection');
	
		echo '<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>';
		echo'<script type="text/javascript">
		jQuery( document ).ready( function( $ ) {
			if($("#sortBy").val() == "manual"){
				$("#manualSelect").show();
				$("#orderPreview").hide();	
			}else{
				$("#manualSelect").hide();
				$("#orderPreview").show()
			}
			
			$("#previewButton").click(function(e) {
			   var data = $( "form" ).serialize();
			   $.post({url: "'.get_template_directory_uri()."/ajax/peoplePreview.php".'", data , success: function(result){
    		   	 $("#orderPreview").html(result);
    			}});
				
			});
			$( ".sortable" ).sortable({
     			 placeholder: "ui-state-highlight"
   			});
			$("#submitButton").click(function(e) {
				var sorted = $( ".sortable" ).sortable( "serialize", { key: "sort" } );
				$("#manualOrder").val(sorted);
				$( "#optionsForm" ).submit();
			});
			$("#sortBy").change(function(e){
				$("#previewButton").click();
				if( $(this).val() == "manual"){
					$("#manualSelect").show();
					$("#orderPreview").hide();
					
				
				}else{
					$("#manualSelect").hide();
					$("#orderPreview").show();
				}
			});
			
			$("#sortDirection").change(function(e){
				$("#previewButton").click();
			});
		});
		</script>';
		?>
        <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
		 <form id="optionsForm" method="post" action='<?php echo $_SERVER['REQUEST_URI'] ?>' enctype="multipart/form-data">
        	<label for="sortBy">Sort by:</label>
            <select id="sortBy" name="sortBy">
            	<option value="id" <?php if($sortBy == "id"){ echo "selected";} ?>>Published Order</option>
                <option value="name" <?php if($sortBy == "name"){ echo "selected";} ?>>Alphabetical Name</option>
                <option value="job" <?php if($sortBy == "job"){ echo "selected";} ?>>Alphabetical Job</option>
                <option value="manual" <?php if($sortBy == "manual"){ echo "selected";} ?>>Manual</option>
            </select>
            <select name="sortDirection">
            	<option value="ASC" <?php if($sortDirection == "ASC"){ echo "selected";} ?>>Ascending</option>
                <option value="DESC" <?php if($sortDirection == "DESC"){ echo "selected";} ?>>Descending</option>
            </select>
            <button type="button" id="previewButton" name="preview">Preview</button>
            <button type="submit" id="submitButton" name="submit">Save</button>
            <input type="hidden" name="sortArray" id="manualOrder" />
        </form>
        <br><br>
        <div id="orderPreview" class="float">
        	<span class="partTitle">Order Preview:</span>
        	<?php
			global $wpdb;
				$table_name = $wpdb->prefix . 'BABP';
				$people = $wpdb->get_results( 'SELECT * FROM '.$table_name.' ORDER BY `'.$table_name.'`.`'.$sortBy.'` '.$sortDirection.'');
//var_dump($_POST);
			foreach($people as $person){
				echo '<div class="personPreview">'.$person->name.' '.$person->job.'</div>';
			}
			?>
		</div>
        <div id="manualSelect" class="float">
        <span class="partTitle">Manual Order (click and drag to reoder)</span>
        <ul class="sortable">
        <?php
		$table_name = $wpdb->prefix . 'BABP';
				$people = $wpdb->get_results( 'SELECT * FROM '.$table_name.' ORDER BY `'.$table_name.'`.`manual` '.$sortDirection.'');
		foreach($people as $person){
				echo '<li id="id_'.$person->id.'" class="personPreview">'.$person->name.' - '.$person->job.'</li>';
			}
		?>
        </ul>
        </div>
		<?php	
	
	
}
?>