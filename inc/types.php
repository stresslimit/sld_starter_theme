<?php 
/**
* @author stresslimit
* 
* Description: this file registers the custom content types
*
*/


if (function_exists('sld_register_post_type')) {

	// sld_register_post_type( 'mytype' );
	// sld_register_taxonomy( 'mytaxonomy', array( 'mytype' ) );

}



add_action( 'admin_init', 'sld_custom_fields');
function sld_custom_fields() {
	if ( !function_exists('x_add_metadata_group') ) return; // let's not get ourselves locked out of the site

	/* mytype */
	// x_add_metadata_group( 'mytype-details', array('mytype'), array('label' => 'mytype Details', 'priority' => 'high') );
	// x_add_metadata_field( 'mytype_field', array('mytype'), array('group' => 'mytype-details', 'label' => 'mytype Field', 'field_type' => 'text' ) );

}

