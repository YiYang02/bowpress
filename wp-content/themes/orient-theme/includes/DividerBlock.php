<?php

// don't load directly
if (!defined('ABSPATH')) die('-1');

class DividerBlock {
	function __construct() {
		// We safely integrate with VC with this hook
		add_action('init', array($this, 'register'));

		// Use this when creating a shortcode addon
		add_shortcode('divider_block', array($this, 'render'));

		// Register CSS and JS
		add_action('wp_enqueue_scripts', array($this, 'loadCssAndJs'));
	}

	public function register() {
		// Check if Visual Composer is installed
		if (!defined('WPB_VC_VERSION')) {
			die;
		}

		/*
		Add your Visual Composer logic here.
		Lets call vc_map function to "register" our custom shortcode within Visual Composer interface.

		More info: http://kb.wpbakery.com/index.php?title=Vc_map
		*/
		vc_map(array(
			"name" => "Divider Block",
			"description" => "A Horizontal Line",
			"base" => "divider_block",
			"class" => "",
			"controls" => "full",
			"category" => 'Content',
			"params" => array()
		));
	}
	
	/*
	Shortcode logic how it should be rendered
	*/
	public function render( $atts, $content = null ) {
		$output = "<hr>";
		return $output;
	}

	/*
	Load plugin css and javascript files which you may need on front end of your site
	*/
	public function loadCssAndJs() {
		//
	}
}

new DividerBlock();