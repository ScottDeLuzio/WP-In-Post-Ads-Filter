<?php
	/*
	Plugin Name: WP In-Post Ads Change Target Tag
	Plugin URI: https://wpinpostads.com/
	Description: A plugin to change the HTML tag WP In-Post Ads targets
	Version: 1.0.0
	Author: Scott DeLuzio
	Author URI: https://scottdeluzio.com
	*/

	function wpipa_change_p_to_h2( $tag ){
		$tag = '<h2>';
		return $tag;
	}
	add_filter( 'wp_inpost_ads_tag', 'wpipa_change_p_to_h2', 10, 1 );

	function wpipa_change_position( $position ){
		$position = 'before';
		return $position;
	}
	add_filter( 'wp_inpost_ads_before_after_filter', 'wpipa_change_position', 10, 1 );

