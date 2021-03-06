</section>

<footer class="footer">
	<div class="row">
		<div class="small-12 large-12 columns">
			<a href="<?=bloginfo( 'url' )?>" class="logo"><img src="<?=get_template_directory_uri().'/assets/img/logo-white.png'?>" alt=""></a>

			<div class="social-links">
				<a href="https://www.facebook.com/khairulsaleh1964"><i class="fa fa-facebook-official"></i>Follow on Facebook</a>				
			</div>

			<p>&copy; 2015 Website Resmi Pangeran Khairul Saleh</p>
		</div>
	</div>
</footer>

<a class="exit-off-canvas"></a>

	<?php do_action( 'foundationpress_layout_end' ); ?>
	</div>
</div>

<?php wp_footer(); ?>
<?php do_action( 'foundationpress_before_closing_body' ); ?>

<script src="<?php echo get_template_directory_uri().'/js/vendor/smooth-scroll.min.js'; ?>"></script>

<script>
	$(window).load(function() {
		$('body').imagesLoaded(function() {
			$('.preloader').fadeOut(100);
			window.sr = new scrollReveal();
			smoothScroll.init({
				speed: 700,
				updateURL: false,
				offset: 100
			});
		});
	});

	$(window).scroll(function() {
		if($(window).scrollTop() < 300) {
			$('section.nav').removeClass('visible');
		} else {
			$('section.nav').addClass('visible');
		}
	})
	
	//Push Menu
	var     menuRight = document.getElementById( 'menu' ),
	        showRightPush = document.getElementById( 'showMenu' ),
	        body = document.body;
	 
	showRightPush.onclick = function() {
	    classie.toggle( this, 'active' );
	    classie.toggle( menuRight, 'open' );
	};

	// $(window).stellar({
	// 	positionProperty: 'transform'
	// });


	$(function($) {
		function parallaxInit() {
			$('.parallax').each(function() {
				$(this).parallax('30%', 0.1);
			});
		}

		if(!device.tablet() && !device.mobile()) {
			$(window).bind('load', function() {
				parallaxInit();
			});
		} else {
			$('.parallax').addClass('no-parallax');
		}
	});
</script>

</body>
</html>
