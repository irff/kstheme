<section class="masthead">
	<?php 
		if(isset($GLOBALS)) {
			$background_image = $GLOBALS['bgi'];
		} else {
			$background_image = "slider-background-01.jpg";
		}
	?>
	<img src="<?php echo get_template_directory_uri().'/assets/img/'.$background_image; ?>" alt="">
</section>