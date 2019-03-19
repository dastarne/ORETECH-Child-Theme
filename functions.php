<?php
/*This file is part of yootheme-child-theme, yootheme child theme.

All functions of this file will be loaded before of parent theme functions.
Learn more at https://codex.wordpress.org/Child_Themes.

Note: this function loads the parent stylesheet before, then child theme stylesheet
(leave it in place unless you know what you are doing.)
*/

function yootheme_child_theme_enqueue_child_styles() {
$parent_style = 'parent-style'; 
	wp_enqueue_style($parent_style, get_template_directory_uri() . '/style.css' );
	wp_enqueue_style( 
		'child-style', 
		get_stylesheet_directory_uri() . '/style.css',
		array( $parent_style ),
		wp_get_theme()->get('Version') );
	}
add_action( 'wp_enqueue_scripts', 'yootheme_child_theme_enqueue_child_styles' );

/* ORETECH custom Styling/scripts */

	function uncgwp_scripts() {
	$domain = "//" . $_SERVER['SERVER_NAME'];
	// load bootstrap css
	wp_enqueue_style( 'uncgwp-bootstrap', $domain . '/rincuncg/css/lib.min.css' );
	
	// loads oretech css
	wp_enqueue_style( 'ortech-custom-yootheme-css', get_stylesheet_directory_uri() . '/css/oretechcustom.css');
	// loads rinc assets
	wp_enqueue_style( 'uncg-assets-common-css', $domain . "/rincuncg/css/common.min.css" );
	wp_enqueue_style( 'uncg-assets-common-css', $domain . "/rincuncg/css/secondary.min.css" );
	wp_enqueue_style( 'uncg-assets-hornav-css', $domain . "/rincuncg/css/horizontal-nav.min.css" );
	wp_enqueue_style( 'uncg-assets-print-css', $domain . "/rincuncg/css/print.min.css", "", "", "print" );
	wp_enqueue_style( 'jquery-ui-css', "//ajax.googleapis.com/ajax/libs/jqueryui/1.11.0/themes/smoothness/jquery-ui.css");
	wp_enqueue_style( 'fastfonts-css', "//fast.fonts.com/cssapi/7860d9f9-615c-442e-ab9b-bd4fe7794024.css" );
	wp_enqueue_style( 'uncgwp-style', get_stylesheet_uri() );

	// load bootstrap js
	wp_enqueue_script('uncgwp-bootstrapjs', $domain . '/rincuncg/js/bootstrap.min.js', array('jquery') );
	wp_enqueue_script( 'uncgwp-skip-link-focus-fix', get_stylesheet_directory_uri() . '/includes/js/skip-link-focus-fix.js', array(), '20130115', true );
	/* Modified js, removed google translate function -- was conflicting with YOOtheme */
	wp_enqueue_script( 'uncg-assets-common-js', get_stylesheet_directory_uri() . '/common.min.js', array('jquery'), '', true );

	}
add_action( 'wp_enqueue_scripts', 'uncgwp_scripts' );

/* End ORETECH custom styling/scripts */

/* UNCG Google Analytics Tracking ID */
	function ns_google_analytics() { ?>
  	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-34361385-1"></script>
	  <script>
		window.dataLayer = window.dataLayer || [];
		function gtag(){dataLayer.push(arguments);}
		gtag('js', new Date());

		gtag('config', 'UA-34361385-1');
	  </script>
  <?php
  }
  add_action( 'wp_head', 'ns_google_analytics', 10 );
/* End GATID */