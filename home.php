<?php
/*
Template Name: Home
*/
get_header(); ?>


<section class="header-background">
	<div class="logo-header">
		<img src="<?=get_template_directory_uri().'/assets/img/logo-header.png'?>" alt="" data-sr="enter top, move 100px, over 2s">
		<p data-sr="vF 0.1, wait 0.5s, enter bottom, move 70px, over 1.5s">"Kunci dari kepemimpinan kepala daerah adalah bagaimana kreativitas dan inovasi seorang kepala daerah, dengan kewenangannya, membangun sistem investasi yang memiliki daya saing, bernilai ekonomi tinggi, dan terpercaya."</p>
	</div>
	<div class="panah">
		<a href="#subscribe" data-scroll>
			<img src="<?=get_template_directory_uri().'/assets/img/panah.png'?>" alt="" data-sr="vF 0.1 enter top, move 100px, over 1s">
		</a>
	</div>
</section>

<section class="subscribe" id="subscribe">
	<div class="row">
		<div class="large-12 columns">
			<div class="separator-line"></div>
		</div>
	</div>
	<div class="row">
		<div class="large-6 columns">
			<div class="quotes">
				<h4 data-sr>"Realisasi program pembangunan dan aspek pembiayaan harus dipikul bersama-sama. Jika tidak, maka pembangunan infrastruktur di Indonesia akan tertinggal."</h4>
			</div>
		</div>
		<div class="large-6 columns">
			<div class="form-subscribe" data-sr>
				<h4>Dukung Pangeran Khairul Saleh untuk Kalimantan Selatan</h4>
				<form action="">
					<div class="row">
						<div class="small-12 large-6 columns">
							<input type="text" placeholder="Nama">					
						</div>
						<div class="small-12 large-6 columns">
							<input type="text" placeholder="Nomor Handphone">
						</div>
						<div class="small-12 large-12 columns">
							<input type="submit" value="Dukung" class="button bg-red">
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</section>


<section class="newberita newberita-home container" id="berita">
	<div class="row">
		<div class="large-12 columns">
			<div class="separator-line"></div>
			<h1 data-sr>Berita Terbaru</h1>
		</div>
	</div>
	<div class="row">
		<div class="large-12 columns">
			<ul class="small-block-grid-1 medium-block-grid-3 large-block-grid-3">
				<?php
				$args = Array('category_name' => 'berita',
							  'posts_per_page' => 3);
				$lastposts = get_posts($args);
				foreach ( $lastposts as $post ) : setup_postdata( $post ); ?>
					<li class="box" data-sr='wait 0.4ss'>
						<a href="<?php the_permalink(); ?>">
							<div class="row">
								<div class="large-6 column">
									<?php the_time( get_option( 'date_format' ) ); ?>
								</div>
								<div class="large-6 column category">
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
	<div class="row">
		<div class="large-12 columns selengkapnya">
			<a href="<?php echo home_url()."/berita"; ?>" class="button" data-sr>Selengkapnya</a>
		</div>
	</div>	
</section>

<section class="quotes">
	<div class="row">
		<div class="large-12 columns">
			<div class="quotes-slider" id="quotes-slider" data-sr>
				<div class="quote-entry">
					<h3>"Realisasi program pembangunan dan aspek pembiayaan harus dipikul bersama-sama. Jika tidak, maka pembangunan infrastruktur di Indonesia akan tertinggal."</h3>
				</div>
				<div class="quote-entry">
					<h3>"Kami menyulap TPA yang dulunya kumuh, kotor, dan bau menjadi TPA yang nyaman, sehat dan malah menghasilkan listrik dan gas."</h3>
				</div>
				<div class="quote-entry">
					<h3>"Masalah lapangan pekerjaan kan tanggung jawab kita semua, maka harus kita atasi bersama-sama. Semakin banyak pihak yang terlibat, semakin mudah kita menjalaninya."</h3>
				</div>
				<div class="quote-entry">
					<h3>"Kunci dari kepemimpinan kepala daerah adalah bagaimana kreativitas dan inovasi seorang kepala daerah, dengan kewenangannya, membangun sistem investasi yang memiliki daya saing, bernilai ekonomi tinggi, dan terpercaya."</h3>
				</div>
				<div class="quote-entry">
					<h3>“Bukan hanya memindahkan gedung perkantoran, tetapi juga membangun sebuah kota baru, Martapura Baru, Martapura Jadid.”</h3>
				</div>
			</div>
		</div>
	</div>
</section>

<?php get_footer(); ?>
