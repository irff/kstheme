</section>

<footer class="footer">
	<div class="row">
		<div class="small-12 large-6 columns">
			<p>&copy; 2015 Website Resmi Pangeran Khairul Saleh</p>
		</div>
		<div class="small-12 large-6 columns">
			
		</div>
	</div>
</footer>

<a class="exit-off-canvas"></a>

	<?php do_action( 'foundationpress_layout_end' ); ?>
	</div>
</div>

<?php wp_footer(); ?>
<?php do_action( 'foundationpress_before_closing_body' ); ?>

<script>
	$(window).load(function() {
		$('body').imagesLoaded(function() {
			$('.preloader').fadeOut(100);
		});
	});
	window.sr = new scrollReveal();
</script>
</body>
</html>
