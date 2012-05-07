<?php
/**
* @author stresslimit
* @package 
* @since 
* 
* description: this file contains all the stuff related to the sidebar management  
*
*/


// =================================
// #1 : setup the diff. sidebars
// =================================
	
$sidebars = array(
	array("name" => "Page Sidebar", "id" => "sidebar1", "description" => "This is the basic (default) sidebar that will appear"),
);

// =================================
// #2 : register the diff. sidebars
// =================================
	
	
	foreach($sidebars as $side) {
    register_sidebar(array(
        'id' => $side["id"],
        'name' => $side["name"],
        'description' => ($side["description"]),
        'before_widget' => '',
        'after_widget' => '',
        'before_title' => '<h2 class="widgettitle">',
        'after_title' => '</h2>',
    ));
}



// ===============================
// #3: sidebar selector meta box
// ===============================

add_action('admin_menu', 'side_add_box');
// add meta box
function side_add_box() {
	global $meta_box;
	add_meta_box('sidebar-meta-box', 'Sidebar', 'side_meta_box', 'page', 'side', 'default');
}

// the actual box
function side_meta_box() {
	global $meta_box, $post, $wp_registered_sidebars, $currentid;
	$currentid = get_post_meta($post->ID, 'sidebar', true);
	echo '<input type="hidden" name="side_nonce" value="', wp_create_nonce(basename(__FILE__)), '" />';
	// echo '<p><strong>Sidebar</strong></p>';
	echo '<select name="sidebar" id="sidebar">';
	echo '<option value="none">none</option>';	
		foreach($wp_registered_sidebars as $sidebar){ 
				echo '<option value="'.$sidebar['id'].'" ';
				if ($sidebar['id'] == $currentid) {echo 'selected'; }
				echo '>'.$sidebar['name'].'</option>';	
			}
				echo '</select>';
			
}

add_action('save_post', 'side_save_data');
// save the data
function side_save_data($post_id) {
	global $meta_box;
	
	// verify nonce
	if (!wp_verify_nonce($_POST['side_nonce'], basename(__FILE__))) {
		return $post_id;
	}

	// check autosave
	if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
		return $post_id;
	}

	// check permissions
	if ('page' == $_POST['post_type']) {
		if (!current_user_can('edit_page', $post_id)) {
			return $post_id;
		}
	} elseif (!current_user_can('edit_post', $post_id)) {
		return $post_id;
	}
	
		$old = get_post_meta($post_id, 'sidebar', true);
		$new = $_POST['sidebar'];
		
		if ($new && $new != $old) {
			update_post_meta($post_id, 'sidebar', $new);
		} elseif ('' == $new && $old) {
			delete_post_meta($post_id, 'sidebar', $old);
		}
}

// ===============================
// #4: allow shortcodes in widgets
// ===============================

add_filter('widget_text', 'do_shortcode');


// ===============================
// #5: include widget files
// ===============================

// include_once('widgets/widget.mywidget.php');


// ===============================
// #6: register widgets
// ===============================

function sld_widgets_init() {
	register_widget('sld_mywidget_widget');

	// remove default widgets
    unregister_widget('WP_Widget_Pages');
    unregister_widget('WP_Widget_Calendar');
    unregister_widget('WP_Widget_Archives');
    unregister_widget('WP_Widget_Links');
    unregister_widget('WP_Widget_Meta');
    unregister_widget('WP_Widget_Search');
    unregister_widget('WP_Widget_Text');
    unregister_widget('WP_Widget_Categories');
    unregister_widget('WP_Widget_Recent_Posts');
    unregister_widget('WP_Widget_Recent_Comments');
    unregister_widget('WP_Widget_RSS');
    unregister_widget('WP_Widget_Tag_Cloud');
    unregister_widget('WP_Nav_Menu_Widget');
}
add_action( 'widgets_init', 'sld_widgets_init' );
