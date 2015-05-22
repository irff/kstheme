<?php
/*
Template Name: Berita
*/
get_header(); ?>

<?php 
	$GLOBALS['bgi'] = "header-biografi.jpg";
	get_template_part( 'parts/masthead' );
?>

<section class="newberita container" id="berita">
	<div class="row">
		<div class="large-12 columns">
			<h1 data-sr>Berita Terbaru</h1>
		</div>
	</div>
	<div class="row">
		<div class="large-12 columns">
			<ul class="small-block-grid-1 medium-block-grid-3 large-block-grid-3">
				<?php
				$args = Array('category_name' => 'berita',
							  'posts_per_page' => 999);
				$lastposts = get_posts($args);
				foreach ( $lastposts as $post ) : setup_postdata( $post ); ?>
					<li class="box" data-sr="vF 0.5, wait 0.4s">
						<a href="<?php the_permalink(); ?>">
							<div class="row">
								<div class="large-6 medium-6 small-6 column">
									<?php the_time( get_option( 'date_format' ) ); ?>
								</div>
								<div class="large-6 medium-6 small-6 column category">
									<?php 
										$category = get_the_category(); 
										echo $category[0]->cat_name;
									?>
								</div>
							</div>
							<?php $featured_image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), "thumbnail" )[0]; ?>
							<div class="image">
								<img src="<?php echo $featured_image; ?>" alt="">
							</div>
							<div class="title">
								<h3><?php the_title(); ?></h3>										
							</div>
							<div class="excerpt">
								<?php the_excerpt(); ?>
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
