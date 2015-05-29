<?php

if ( ! function_exists( 'foundationpress_scripts' ) ) :
	function foundationpress_scripts() {

		// Enqueue Main Stylesheet
		wp_enqueue_style( 'Main Stylesheet',  '/wp-content/themes/kstheme/css/foundation.css' );

		// Deregister the jquery version bundled with wordpress
		wp_deregister_script( 'jquery' );

		// Modernizr is used for polyfills and feature detection. Must be placed in header. (Not required)
		wp_register_script( 'modernizr',  '/wp-content/themes/kstheme/js/vendor/modernizr.js', array(), '2.8.3', false );

		// Fastclick removes the 300ms delay on click events in mobile environments. Must be placed in header. (Not required)
		wp_register_script( 'fastclick',  '/wp-content/themes/kstheme/js/vendor/fastclick.js', array(), '1.0.0', false );
		wp_register_script( 'slickjs',  '/wp-content/themes/kstheme/js/vendor/slick.min.js', array(), '1.5.0', false );
		wp_register_script( 'scrollreveal',  '/wp-content/themes/kstheme/js/vendor/scrollReveal.min.js', array(), '1.5.0', false );
		wp_register_script( 'imagesloaded',  '/wp-content/themes/kstheme/js/vendor/imagesloaded.pkgd.min.js', array(), '1.5.0', false );
		wp_register_script( 'classie',  '/wp-content/themes/kstheme/js/vendor/classie.js', array(), '1.5.0', false );
		// wp_register_script( 'stellar',  '/wp-content/themes/kstheme/js/vendor/jquery.stellar.min.js', array(), '1.5.0', false );
		wp_register_script( 'device',  '/wp-content/themes/kstheme/js/vendor/device.min.js', array(), '1.5.0', false );
		wp_register_script( 'parallax',  '/wp-content/themes/kstheme/js/vendor/jquery.parallax.js', array(), '1.5.0', false );

		// CDN hosted jQuery placed in the header, as some plugins require that jQuery is loaded in the header.
		wp_enqueue_script( 'jquery', '//ajax.googleapis.com/ajax/libs/jquery/2.1.0/jquery.min.js', array(), '2.1.0', false );

		// Self hosted jQuery placed in the footer. (Comment the script above and uncomment the script below if you want to switch).
		//wp_register_script( 'jquery',  '/wp-content/themes/kstheme/js/vendor/jquery.js', array(), '2.1.3', true );

		// If you'd like to cherry-pick the foundation components you need in your project, head over to Gruntfile.js and see lines 67-88
		// It's a good idea to do this, performance-wise. No need to load everything if you're just going to use the grid anyway, you know :)
		wp_register_script( 'foundation',  '/wp-content/themes/kstheme/js/foundation.js', array('jquery'), '5.5.1', true );
		
		wp_register_script( 'kstheme',  '/wp-content/themes/kstheme/js/kstheme.js', array(), '0.0.1', false );

		// Enqueue all registered scripts
		wp_enqueue_script( 'modernizr' );
		wp_enqueue_script( 'fastclick' );
		wp_enqueue_script( 'jquery' );
		wp_enqueue_script( 'foundation' );
		wp_enqueue_script( 'slickjs' );
		wp_enqueue_script( 'scrollreveal' );
		wp_enqueue_script( 'imagesloaded' );
		wp_enqueue_script( 'classie' );
		wp_enqueue_script( 'device' );
		wp_enqueue_script( 'parallax' );
		wp_enqueue_script( 'kstheme' );

	}

	add_action( 'wp_enqueue_scripts', 'foundationpress_scripts' );
endif;

?>
