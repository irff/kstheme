<?php
/*
Template Name: Home
*/
get_header(); ?>
<section class="header-background">
	<div class="box-dukung">
		<h3>Dukung Pangeran Khairul Saleh untuk Kalimantan Selatan</h3>
		<form action="">
			<div class="row">
				<div class="small-12 large-6 columns">
					<input type="text" placeholder="Nama">					
				</div>
				<div class="small-12 large-6 columns">
					<input type="text" placeholder="Nomor Handphone">
				</div>
				<div class="small-12 large-12 columns">
					<input type="submit" value="Dukung" class="button expand">
				</div>
			</div>
		</form>
	</div>
	<div class="box-social">
		<a href="https://www.facebook.com/khairulsaleh1964">Follow on Facebook</a>
	</div>
</section>

<section class="berita container">
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
							  'posts_per_page' => 4);
				$lastposts = get_posts($args);
				foreach ( $lastposts as $post ) : setup_postdata( $post ); ?>
					<li class="box">
						<a href="<?php the_permalink(); ?>">
							<div class="row">
								<div class="small-6 medium-4 large-6 columns">
									<?php $featured_image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'thumbnail' )[0]; ?>
									<img src="<?php echo $featured_image; ?>" alt="">
								</div>
								<div class="small-6 medium-8 large-6 columns title-container">
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
	<div class="row">
		<div class="large-12 columns selengkapnya">
			<a href="<?php echo home_url()."/berita"; ?>" class="button">Selengkapnya</a>
		</div>
	</div>
</section>

<section class="quotes">
	<div class="row">
		<div class="large-12 columns">
			<h1>Quotes</h1>
		</div>
	</div>
	<div class="row">
		<div class="large-12 columns">
			<div class="quotes-slider" id="quotes-slider">
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
					<h3>"Kunci dari kepemimpinan kepala daerah adalah bagaimana kreativitas dan inovasi seorang kepala daerah, dengan kewenangannya, membangun sistem investasi yang memiliki daya saing, bernilai ekonomi tinggi, dan terpecaya."</h3>
				</div>
				<div class="quote-entry">
					<h3>“Bukan hanya memindahkan gedung perkantoran, tetapi juga membangun sebuah kota baru, Martapura Baru, Martapura Jadid.”</h3>
				</div>
			</div>
		</div>
	</div>
</section>

<?php get_footer(); ?>
