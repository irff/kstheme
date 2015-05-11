<?php
/*
Template Name: Home
*/
get_header(); ?>
<div class="preloader">
	<div class="animation">
		<img src="<?=get_template_directory_uri().'/assets/img/preloader.gif'?>" alt="">
	</div>
</div>


<section class="header-background">
	<!-- 
	<div class="box-dukung" data-sr>
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
	  -->
	  <!-- 

	<div class="container">
		<div class="row">
			<div class="large-6 column">
				<div class="portrait-image">
					<img src="<?=get_template_directory_uri().'/assets/img/khairul_saleh.png'?>" alt="">					
				</div>
			</div>
			<div class="large-6 column">
				<div class="tagline">
					<div class="slogan-1">
						<h2 data-sr="wait 1s, enter left, move 75px, over 1s">Berpengalaman</h2>						
					</div>
					<div class="slogan-2">
						<h2 data-sr="wait 2s, enter right, move 75px, over 1s">Berprestasi</h2>						
					</div>
					<div class="slogan-3">
						<h2 data-sr="wait 3s, enter left, move 75px, over 1s">Amanah</h2>
					</div>
				</div>
				<div class="dukung" data-sr="wait 4s">
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
								<input type="submit" value="Dukung" class="button bg-red">
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
	<div class="box-social">
		<a href="https://www.facebook.com/khairulsaleh1964">Follow on Facebook</a>
	</div>
	 -->
	<div class="logo-header">
		<img src="<?=get_template_directory_uri().'/assets/img/logo-header.png'?>" alt="" data-sr="enter top, move 100px, over 2s">
		<p data-sr="vF 0.1, wait 0.5s, enter bottom, move 70px, over 1.5s">"Kunci dari kepemimpinan kepala daerah adalah bagaimana kreativitas dan inovasi seorang kepala daerah, dengan kewenangannya, membangun sistem investasi yang memiliki daya saing, bernilai ekonomi tinggi, dan terpecaya."</p>
	</div>
	<div class="panah">
		<a href="#berita" data-scroll>
			<img src="<?=get_template_directory_uri().'/assets/img/panah.png'?>" alt="" data-sr="vF 0.1 enter top, move 100px, over 1s">
		</a>
	</div>
</section>

<section class="subscribe">
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
			<ul class="small-block-grid-1 medium-block-grid-1 large-block-grid-3">
				<?php
				$args = Array('category_name' => 'berita',
							  'posts_per_page' => 3);
				$counter = 1;
				$lastposts = get_posts($args);
				foreach ( $lastposts as $post ) : setup_postdata( $post ); ?>
					<li class="box" data-sr='wait <?php echo $counter*0.4; ?>s'>
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
					$counter++;
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
			<h1 data-sr>Quotes</h1>
		</div>
	</div>
	<div class="row">
		<div class="large-12 columns">
			<div class="quotes-slider" id="quotes-slider">
				<div class="quote-entry">
					<h3 data-sr>"Realisasi program pembangunan dan aspek pembiayaan harus dipikul bersama-sama. Jika tidak, maka pembangunan infrastruktur di Indonesia akan tertinggal."</h3>
				</div>
				<div class="quote-entry">
					<h3 data-sr>"Kami menyulap TPA yang dulunya kumuh, kotor, dan bau menjadi TPA yang nyaman, sehat dan malah menghasilkan listrik dan gas."</h3>
				</div>
				<div class="quote-entry">
					<h3 data-sr>"Masalah lapangan pekerjaan kan tanggung jawab kita semua, maka harus kita atasi bersama-sama. Semakin banyak pihak yang terlibat, semakin mudah kita menjalaninya."</h3>
				</div>
				<div class="quote-entry">
					<h3 data-sr>"Kunci dari kepemimpinan kepala daerah adalah bagaimana kreativitas dan inovasi seorang kepala daerah, dengan kewenangannya, membangun sistem investasi yang memiliki daya saing, bernilai ekonomi tinggi, dan terpecaya."</h3>
				</div>
				<div class="quote-entry">
					<h3 data-sr>“Bukan hanya memindahkan gedung perkantoran, tetapi juga membangun sebuah kota baru, Martapura Baru, Martapura Jadid.”</h3>
				</div>
			</div>
		</div>
	</div>
</section>

<?php get_footer(); ?>
