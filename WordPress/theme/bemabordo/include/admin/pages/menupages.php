<?php
function bab_toplevel_page() {
	echo "page";
	global $wpdb;
	$table_name = $wpdb->prefix . 'BAB_StaticText';
	$results = $wpdb->get_results( 'SELECT * FROM '.$table_name." ORDER BY `".$table_name."`.`container` ASC",ARRAY_A );
	 if ( $_SERVER["REQUEST_METHOD"] == "POST" ){
		//var_dump($_POST);
		foreach($_POST as $id => $text){
			if($id !== "save"){
			$wpdb->update( 
					$table_name, 
					array(
						'text_pt' => $text["text_pt"],
						'text_en' => $text["text_en"]
					), array( 
						'id' => $id
					)
				);
			}
			else{
			//var_dump($id);
			}
		}
	 }
	echo'<form method="post" action="'.$_SERVER['REQUEST_URI'].'" enctype="multipart/form-data">';
	foreach($results as $text){
		//return ($text["text_".$lang]);
		?>
        <label for="<?php echo $text["id"] ?>"><?php echo $text["id"] ?></label><input type="text" name="<?php echo $text["id"]."[text_pt]" ?>" value="<?php echo $text["text_pt"] ?>"><input type="text" name="<?php echo $text["id"]."[text_en]" ?>" value="<?php echo $text["text_en"] ?>"> <br>
        <?php
	}
	echo'<button type="submit" name="save">Save</button>';
	echo "</form>";
}
?>