<?php
/*
Template Name: Berita
*/
get_header(); ?>

<?php 
	$GLOBALS['bgi'] = "slider-background-03.jpg";
	get_template_part( 'parts/masthead' );
?>

<section class="berita berita-page container">
	<div class="row">
		<div class="large-12 columns">
			<h1>Berita Terbaru</h1>
		</div>
	</div>
	<div class="row">
		<div class="large-12 columns">
			<ul class="small-block-grid-1 medium-block-grid-2 large-block-grid-2">
				<?php
				$args = Array('category_name' => 'berita',
							  'posts_per_page' => 999);
				$lastposts = get_posts($args);
				foreach ( $lastposts as $post ) : setup_postdata( $post ); ?>
					<li class="box">
						<a href="<?php the_permalink(); ?>">
							<div class="row">
								<div class="small-4 medium-4 large-6 columns">
									<?php $featured_image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'thumbnail' )[0]; ?>
									<img src="<?php echo $featured_image; ?>" alt="">
								</div>
								<div class="small-8 medium-8 large-6 columns title-container">
									<div class="title">
										<h3><?php the_title(); ?></h3>										
									</div>
								</div>
							</div>
						</a>
					</li>
				<?php
				endforeach; 
				wp_reset_postdata(); ?>
			</ul>			
		</div>
	</div>
</section>

<?php get_footer(); ?>
