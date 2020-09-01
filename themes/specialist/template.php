<?php
/**
 * Implements hook_preprocess_html().
 */
function THEMENAME_preprocess_html( &$vars ) {
	drupal_add_html_head( array(
		'#type'       => 'html_tag',
		'#tag'        => 'meta',
		'#attributes' => array(
			'name'    => 'viewport',
			'content' => 'width=device-width, initial-scale=1.0',
		)
	), 'meta_viewport' );
}
?>
