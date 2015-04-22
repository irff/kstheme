<?php
/*
Author: Ole Fredrik Lie
URL: http://olefredrik.com
*/


// Various clean up functions
require_once('library/cleanup.php');

// Required for Foundation to work properly
require_once('library/foundation.php');

// Register all navigation menus
require_once('library/navigation.php');

// Add menu walkers
require_once('library/menu-walker.php');
require_once('library/offcanvas-walker.php');

// Create widget areas in sidebar and footer
require_once('library/widget-areas.php');

// Return entry meta information for posts
require_once('library/entry-meta.php');

// Enqueue scripts
require_once('library/enqueue-scripts.php');

// Add theme support
require_once('library/theme-support.php');

// Add Header image
require_once('library/custom-header.php');

// Add post thumbnail supports. http://codex.wordpress.org/Post_Thumbnails
add_theme_support('post-thumbnails');
// set_post_thumbnail_size(150, 150, false);
add_image_size('fd-lrg', 1024, 99999);
add_image_size('fd-med', 768, 99999);
add_image_size('fd-sm', 320, 9999);
set_post_thumbnail_size( 320, 320, true );

?>
