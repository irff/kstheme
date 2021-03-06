<!doctype html>
<html class="no-js" <?php language_attributes(); ?> >
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title><?php if ( is_category() ) {
			echo 'Category Archive for &quot;'; single_cat_title(); echo '&quot; | '; bloginfo( 'name' );
		} elseif ( is_tag() ) {
			echo 'Tag Archive for &quot;'; single_tag_title(); echo '&quot; | '; bloginfo( 'name' );
		} elseif ( is_archive() ) {
			wp_title( '' ); echo ' Archive | '; bloginfo( 'name' );
		} elseif ( is_search() ) {
			echo 'Search for &quot;'.esc_html( $s ).'&quot; | '; bloginfo( 'name' );
		} elseif ( is_home() || is_front_page() ) {
			bloginfo( 'name' ); echo ' | '; bloginfo( 'description' );
		}  elseif ( is_404() ) {
			echo 'Error 404 Not Found | '; bloginfo( 'name' );
		} elseif ( is_single() ) {
			wp_title( '' );
		} else {
			echo wp_title( ' | ', 'false', 'right' ); bloginfo( 'name' );
		} ?></title>

		<?php wp_head(); ?>
		<!-- Google Analytics Script -->
		<script>
		  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

		  ga('create', 'UA-59001195-4', 'auto');
		  ga('send', 'pageview');

		</script>
	</head>
	<body>

	
	<?php do_action( 'foundationpress_after_body' ); ?>
	<?php do_action( 'foundationpress_layout_start' ); ?>

	<nav class="menu" id="menu">
		<a href="<?=bloginfo( 'url' )?>">Beranda</a>
		<a href="/berita">Berita</a>
		<a href="/biografi">Biografi</a>
		<a href="/prestasi">Prestasi</a>
		<a href="https://www.facebook.com/khairulsaleh1964">Facebook</a>
		<button id="showMenu">Menu</button>
	</nav>
	
	<div class="preloader">
		<div class="animation">
			<img src="<?=get_template_directory_uri().'/assets/img/preloader.gif'?>" alt="">
		</div>
	</div>
<section class="container" role="document">
	<?php do_action( 'foundationpress_after_header' ); ?>
	<?php include("navigation.php"); ?>
