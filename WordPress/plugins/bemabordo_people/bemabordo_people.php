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
		manual mediumint(9) NOT NULL,
		time datetime DEFAULT '0000-00-00 00:00:00' NOT NULL,
		name tinytext NOT NULL,
		job tinytext NOT NULL,
		text_en text NOT NULL,
		job_en tinytext NOT NULL,
		text text NOT NULL,
		facebook varchar(55) DEFAULT '' NOT NULL,
		linkedin varchar(55) DEFAULT '' NOT NULL,
		image varchar(500) DEFAULT '' NOT NULL,
		PRIMARY KEY  (id)
	) $charset_collate;";

	require_once( ABSPATH . 'wp-admin/includes/upgrade.php' );
	dbDelta( $sql );

	update_option ( 'BABP_db_version', $BABP_db_version );
	add_option('BABP_sortBy', 'id');
	add_option('BABP_sortDirection', 'ASC');
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
			'manual' => "0", 
			'name' => $welcome_name, 
			'job' => $welcome_job, 
			'job_en' => $welcome_job, 
			'facebook' => $welcome_facebook, 
			'linkedin' => $welcome_linkedin, 
			'text' => $welcome_text,
			'text_en' => $welcome_text, 
			'image' => $welcome_image, 
		) 
	);
}


if(!class_exists('WP_List_Table')){
    require_once( ABSPATH . 'wp-admin/includes/class-wp-list-table.php' );
}


/************************** CREATE A PACKAGE CLASS *****************************
 *******************************************************************************
 * Create a new list table package that extends the core WP_List_Table class.
 * WP_List_Table contains most of the framework for generating the table, but we
 * need to define and override some methods so that our data can be displayed
 * exactly the way we need it to be.
 * 
 * To display this example on a page, you will first need to instantiate the class,
 * then call $yourInstance->prepare_items() to handle any data manipulation, then
 * finally call $yourInstance->display() to render the table to the page.
 * 
 * Our theme for this list table is going to be movies.
 */
class TT_Example_List_Table extends WP_List_Table {
    
    /** ************************************************************************
     * Normally we would be querying data from a database and manipulating that
     * for use in your list table. For this example, we're going to simplify it
     * slightly and create a pre-built array. Think of this as the data that might
     * be returned by $wpdb->query()
     * 
     * In a real-world scenario, you would make your own custom query inside
     * this class' prepare_items() method.
     * 
     * @var array 
     **************************************************************************/
    var $example_data = array(
            array(
                'ID'        => 1,
                'title'     => '300',
                'rating'    => 'R',
                'director'  => 'Zach Snyder'
            ),
            array(
                'ID'        => 2,
                'title'     => 'Eyes Wide Shut',
                'rating'    => 'R',
                'director'  => 'Stanley Kubrick'
            ),
            array(
                'ID'        => 3,
                'title'     => 'Moulin Rouge!',
                'rating'    => 'PG-13',
                'director'  => 'Baz Luhrman'
            ),
            array(
                'ID'        => 4,
                'title'     => 'Snow White',
                'rating'    => 'G',
                'director'  => 'Walt Disney'
            ),
            array(
                'ID'        => 5,
                'title'     => 'Super 8',
                'rating'    => 'PG-13',
                'director'  => 'JJ Abrams'
            ),
            array(
                'ID'        => 6,
                'title'     => 'The Fountain',
                'rating'    => 'PG-13',
                'director'  => 'Darren Aronofsky'
            ),
            array(
                'ID'        => 7,
                'title'     => 'Watchmen',
                'rating'    => 'R',
                'director'  => 'Zach Snyder'
            ),
            array(
                'ID'        => 8,
                'title'     => '2001',
                'rating'    => 'G',
                'director'  => 'Stanley Kubrick'
            ),
        );


    /** ************************************************************************
     * REQUIRED. Set up a constructor that references the parent constructor. We 
     * use the parent reference to set some default configs.
     ***************************************************************************/
    function __construct(){
        global $status, $page;
                
        //Set parent defaults
        parent::__construct( array(
            'singular'  => 'person',     //singular name of the listed records
            'plural'    => 'people',    //plural name of the listed records
            'ajax'      => false        //does this table support ajax?
        ) );
		
        
    }


    /** ************************************************************************
     * Recommended. This method is called when the parent class can't find a method
     * specifically build for a given column. Generally, it's recommended to include
     * one method for each column you want to render, keeping your package class
     * neat and organized. For example, if the class needs to process a column
     * named 'title', it would first see if a method named $this->column_title() 
     * exists - if it does, that method will be used. If it doesn't, this one will
     * be used. Generally, you should try to use custom column methods as much as 
     * possible. 
     * 
     * Since we have defined a column_title() method later on, this method doesn't
     * need to concern itself with any column with a name of 'title'. Instead, it
     * needs to handle everything else.
     * 
     * For more detailed insight into how columns are handled, take a look at 
     * WP_List_Table::single_row_columns()
     * 
     * @param array $item A singular item (one full row's worth of data)
     * @param array $column_name The name/slug of the column to be processed
     * @return string Text or HTML to be placed inside the column <td>
     **************************************************************************/
    function column_default($item, $column_name){
        switch($column_name){
            case 'rating':
            case 'director':
                return $item[$column_name];
            default:
                return print_r($item[$column_name],true); //Show the whole array for troubleshooting purposes
        }
    }


    /** ************************************************************************
     * Recommended. This is a custom column method and is responsible for what
     * is rendered in any column with a name/slug of 'title'. Every time the class
     * needs to render a column, it first looks for a method named 
     * column_{$column_title} - if it exists, that method is run. If it doesn't
     * exist, column_default() is called instead.
     * 
     * This example also illustrates how to implement rollover actions. Actions
     * should be an associative array formatted as 'slug'=>'link html' - and you
     * will need to generate the URLs yourself. You could even ensure the links
     * 
     * 
     * @see WP_List_Table::::single_row_columns()
     * @param array $item A singular item (one full row's worth of data)
     * @return string Text to be placed inside the column <td> (movie title only)
     **************************************************************************/
	
	  function column_name($item){
        
        //Build row actions
        $actions = array(
            'edit'      => sprintf('<a href="?page=%s&action=%s&id=%s">Edit</a>',$_REQUEST['page'],'edit',$item['id']),
            'delete'    => sprintf('<a href="?page=%s&action=%s&id=%s">Delete</a>',$_REQUEST['page'],'delete',$item['id']),
        );
        
        //Return the title contents
        return sprintf('%1$s <span style="color:silver">(id:%2$s)</span>%3$s',
            /*$1%s*/ $item['name'],
            /*$2%s*/ $item['id'],
            /*$3%s*/ $this->row_actions($actions)
        );
    }
	
	function column_job($item){
        
        //Return the title contents
        return sprintf('%1$s',
            /*$1%s*/ $item['job']
        );
    }
	function column_image($item){
        
        //Return the title contents
        return sprintf('<img src="%1$s">',
            /*$1%s*/ site_url().$item['image']
        );
    }


    /** ************************************************************************
     * REQUIRED if displaying checkboxes or using bulk actions! The 'cb' column
     * is given special treatment when columns are processed. It ALWAYS needs to
     * have it's own method.
     * 
     * @see WP_List_Table::::single_row_columns()
     * @param array $item A singular item (one full row's worth of data)
     * @return string Text to be placed inside the column <td> (movie title only)
     **************************************************************************/
    function column_cb($item){
        return sprintf(
            '<input type="checkbox" name="%1$s[]" value="%2$s" />',
            /*$1%s*/ $this->_args['singular'],  //Let's simply repurpose the table's singular label ("movie")
            /*$2%s*/ $item['ID']                //The value of the checkbox should be the record's id
        );
    }


    /** ************************************************************************
     * REQUIRED! This method dictates the table's columns and titles. This should
     * return an array where the key is the column slug (and class) and the value 
     * is the column's title text. If you need a checkbox for bulk actions, refer
     * to the $columns array below.
     * 
     * The 'cb' column is treated differently than the rest. If including a checkbox
     * column in your table you must create a column_cb() method. If you don't need
     * bulk actions or checkboxes, simply leave the 'cb' entry out of your array.
     * 
     * @see WP_List_Table::::single_row_columns()
     * @return array An associative array containing column information: 'slugs'=>'Visible Titles'
     **************************************************************************/
    function get_columns(){
        $columns = array(
            'cb'        => '<input type="checkbox" />', //Render a checkbox instead of text
            'name'     => 'Name',
            'job'    => 'Job',
            'text'    => 'Description',
			'job_en'    => 'Job in english',
            'text_en'    => 'Description in english',
			'facebook'  => 'Facebook Link',
			'linkedin'  => 'Linkedin Link',
			'image'  => 'Photo'
			
        );
        return $columns;
    }


    /** ************************************************************************
     * Optional. If you want one or more columns to be sortable (ASC/DESC toggle), 
     * you will need to register it here. This should return an array where the 
     * key is the column that needs to be sortable, and the value is db column to 
     * sort by. Often, the key and value will be the same, but this is not always
     * the case (as the value is a column name from the database, not the list table).
     * 
     * This method merely defines which columns should be sortable and makes them
     * clickable - it does not handle the actual sorting. You still need to detect
     * the ORDERBY and ORDER querystring variables within prepare_items() and sort
     * your data accordingly (usually by modifying your query).
     * 
     * @return array An associative array containing all the columns that should be sortable: 'slugs'=>array('data_values',bool)
     **************************************************************************/
    function get_sortable_columns() {
        $sortable_columns = array(
            'name'     => array('name',false),     //true means it's already sorted
            'job'    => array('job',false),
			'linkedin'    => array('linkedin',false),
            'facebook'  => array('facebook',false)
        );
        return $sortable_columns;
    }


    /** ************************************************************************
     * Optional. If you need to include bulk actions in your list table, this is
     * the place to define them. Bulk actions are an associative array in the format
     * 'slug'=>'Visible Title'
     * 
     * If this method returns an empty value, no bulk action will be rendered. If
     * you specify any bulk actions, the bulk actions box will be rendered with
     * the table automatically on display().
     * 
     * Also note that list tables are not automatically wrapped in <form> elements,
     * so you will need to create those manually in order for bulk actions to function.
     * 
     * @return array An associative array containing all the bulk actions: 'slugs'=>'Visible Titles'
     **************************************************************************/
    function get_bulk_actions() {
        $actions = array(
            'delete'    => 'Delete'
        );
        return $actions;
    }


    /** ************************************************************************
     * Optional. You can handle your bulk actions anywhere or anyhow you prefer.
     * For this example package, we will handle it in the class to keep things
     * clean and organized.
     * 
     * @see $this->prepare_items()
     **************************************************************************/
    function process_bulk_action() {
        
        //Detect when a bulk action is being triggered...
        if( 'delete'===$this->current_action() ) {
            wp_die('Items deleted (or they would be if we had items to delete)!');
        }
        
    }


    /** ************************************************************************
     * REQUIRED! This is where you prepare your data for display. This method will
     * usually be used to query the database, sort and filter the data, and generally
     * get it ready to be displayed. At a minimum, we should set $this->items and
     * $this->set_pagination_args(), although the following properties and methods
     * are frequently interacted with here...
     * 
     * @global WPDB $wpdb
     * @uses $this->_column_headers
     * @uses $this->items
     * @uses $this->get_columns()
     * @uses $this->get_sortable_columns()
     * @uses $this->get_pagenum()
     * @uses $this->set_pagination_args()
     **************************************************************************/
    function prepare_items() {
        global $wpdb; //This is used only if making any database queries

        /**
         * First, lets decide how many records per page to show
         */
        $per_page = 5;
        
        
        /**
         * REQUIRED. Now we need to define our column headers. This includes a complete
         * array of columns to be displayed (slugs & titles), a list of columns
         * to keep hidden, and a list of columns that are sortable. Each of these
         * can be defined in another method (as we've done here) before being
         * used to build the value for our _column_headers property.
         */
        $columns = $this->get_columns();
        $hidden = array();
        $sortable = $this->get_sortable_columns();
        
        
        /**
         * REQUIRED. Finally, we build an array to be used by the class for column 
         * headers. The $this->_column_headers property takes an array which contains
         * 3 other arrays. One for all columns, one for hidden columns, and one
         * for sortable columns.
         */
        $this->_column_headers = array($columns, $hidden, $sortable);
        
        
        /**
         * Optional. You can handle your bulk actions however you see fit. In this
         * case, we'll handle them within our package just to keep things clean.
         */
        $this->process_bulk_action();
        
        
        /**
         * Instead of querying a database, we're going to fetch the example data
         * property we created for use in this plugin. This makes this example 
         * package slightly different than one you might build on your own. In 
         * this example, we'll be using array manipulation to sort and paginate 
         * our data. In a real-world implementation, you will probably want to 
         * use sort and pagination data to build a custom query instead, as you'll
         * be able to use your precisely-queried data immediately.
         */
        //$data = $this->example_data;
        $table_name = $wpdb->prefix . 'BABP';
		$data = $wpdb->get_results( 'SELECT * FROM '.$table_name, ARRAY_A);
		//var_dump($data); 
		//var_dump($this->example_data);
        
        /**
         * This checks for sorting input and sorts the data in our array accordingly.
         * 
         * In a real-world situation involving a database, you would probably want 
         * to handle sorting by passing the 'orderby' and 'order' values directly 
         * to a custom query. The returned data will be pre-sorted, and this array
         * sorting technique would be unnecessary.
         */
        function usort_reorder($a,$b){
            $orderby = (!empty($_REQUEST['orderby'])) ? $_REQUEST['orderby'] : 'title'; //If no sort, default to title
            $order = (!empty($_REQUEST['order'])) ? $_REQUEST['order'] : 'asc'; //If no order, default to asc
            $result = strcmp($a[$orderby], $b[$orderby]); //Determine sort order
            return ($order==='asc') ? $result : -$result; //Send final sort direction to usort
        }
        usort($data, 'usort_reorder');
        
        
        /***********************************************************************
         * ---------------------------------------------------------------------
         * vvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvv
         * 
         * In a real-world situation, this is where you would place your query.
         *
         * For information on making queries in WordPress, see this Codex entry:
         * http://codex.wordpress.org/Class_Reference/wpdb
         * 
         * ^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^
         * ---------------------------------------------------------------------
         **********************************************************************/
        
                
        /**
         * REQUIRED for pagination. Let's figure out what page the user is currently 
         * looking at. We'll need this later, so you should always include it in 
         * your own package classes.
         */
        $current_page = $this->get_pagenum();
        
        /**
         * REQUIRED for pagination. Let's check how many items are in our data array. 
         * In real-world use, this would be the total number of items in your database, 
         * without filtering. We'll need this later, so you should always include it 
         * in your own package classes.
         */
        $total_items = count($data);
        
        
        /**
         * The WP_List_Table class does not handle pagination for us, so we need
         * to ensure that the data is trimmed to only the current page. We can use
         * array_slice() to 
         */
        $data = array_slice($data,(($current_page-1)*$per_page),$per_page);
        
        
        
        /**
         * REQUIRED. Now we can add our *sorted* data to the items property, where 
         * it can be used by the rest of the class.
         */
        $this->items = $data;
        
        
        /**
         * REQUIRED. We also have to register our pagination options & calculations.
         */
        $this->set_pagination_args( array(
            'total_items' => $total_items,                  //WE have to calculate the total number of items
            'per_page'    => $per_page,                     //WE have to determine how many items to show on a page
            'total_pages' => ceil($total_items/$per_page)   //WE have to calculate the total number of pages
        ) );
    }


}






/** Step 2 (from text above). */
add_action( 'admin_menu', 'my_plugin_menu' );

/** Step 1. */
function my_plugin_menu() {
	//add_options_page( 'People', 'People', 'manage_options', 'BABP', 'my_plugin_options' );
	// Add a new top-level menu (ill-advised):
    add_menu_page(__('People(BAB)','menu-test'), __('People(BAB)','menu-test'), 'manage_options', 'BAB_People', 'mt_toplevel_page' );

    // Add a submenu to the custom top-level menu:
    add_submenu_page('BAB_People', __('Options','menu-test'), __('Options','menu-test'), 'manage_options', 'Options', 'mt_sublevel_page');

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
	if($_REQUEST["action"] == NULL){
		//var_dump($_REQUEST);
	
	$testListTable = new TT_Example_List_Table();
    //Fetch, prepare, sort, and filter our data...
    $testListTable->prepare_items();
	 echo "<h2>" . __( 'People (Bem a Bordo People Plugin)', 'menu-test' ) . '</h2> <a href="?page='.$_REQUEST['page'].'&action=add" class="page-title-action">Add New</a>';
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
	echo'<script src="'.plugins_url('image.js', __FILE__).'"></script>';
	echo '<link rel="stylesheet" type="text/css" href="'.plugins_url('BABP.css', __FILE__).'">';
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
				$image = plugins_url('person.png', __FILE__);
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
			<img id='image-preview' src='<?php if(isset($image)){ echo site_url().$image; } else{ echo plugins_url('person.png', __FILE__); } ?>' height='100'>
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
	echo '<link rel="stylesheet" type="text/css" href="'.plugins_url('BABP.css', __FILE__).'">';
    
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

// mt_sublevel_page() displays the page content for the first submenu
// of the custom Test Toplevel menu
function mt_sublevel_page() {
	//var_dump($_GET);
	if ( !current_user_can( 'manage_options' ) )  {
		wp_die( __( 'You do not have sufficient permissions to access this page.' ) );
	}
    global $wpdb;
	echo '<link rel="stylesheet" type="text/css" href="'.plugins_url('BABP.css', __FILE__).'">';
	echo "<h2>" . __( 'Options', 'menu-test' ) . "</h2>";
	
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
			   $.post({url: "'.plugins_url('peoplePreview.php', __FILE__).'", data , success: function(result){
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

// mt_sublevel_page2() displays the page content for the second submenu
// of the custom Test Toplevel menu
function mt_sublevel_page2() {
	if ( !current_user_can( 'manage_options' ) )  {
		wp_die( __( 'You do not have sufficient permissions to access this page.' ) );
	}
    echo "<h2>" . __( 'Test Sublevel2', 'menu-test' ) . "</h2>";
	global $wpdb;
	echo '<link rel="stylesheet" type="text/css" href="'.plugins_url('BABP.css', __FILE__).'">';
    
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




function BABP_getPeople($lang){
	global $wpdb;
	$sortBy = get_option( 'BABP_sortBy');
	$sortDirection = get_option( 'BABP_sortDirection');
	$table_name = $wpdb->prefix . 'BABP';
	$people = $wpdb->get_results( 'SELECT * FROM '.$table_name.' ORDER BY `'.$table_name.'`.`'.$sortBy.'` '.$sortDirection.'');
	
	foreach($people as $person){?>
		
        <div id="person<?php echo $person->id; ?>" class="person">
            		<span class="personPhoto"><img src="<?php echo site_url().$person->image; ?>" alt=""/></span>
                    <span class="personText">
                    	<span class="personSocialContainer"><a href="<?php echo $person->facebook; ?>"><img src="<?php bloginfo('template_directory');?>/image/weAreFacebook.png" alt=""/></a><a href="<?php echo $person->linkedin; ?>"><img src="<?php bloginfo('template_directory');?>/image/weAreLinkedin.png" alt=""/></a></span>
                    	<div class="personName"><?php echo $person->name; ?></div>
                        <div class="personJob"><?php  if($lang == "pt"){echo $person->job;} elseif($lang == "en"){ echo $person->job_en;} ?></div>
                        </span>
                        <div class="personDescription"><?php if($lang == "pt"){ echo $person->text; }elseif($lang == "en"){ echo $person->text_en;} ?></div>
                    
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


//add_action( 'admin_footer', 'media_selector_print_scripts' );

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