<div class="footer_section">
	<div class="video-wrap">
		<video disableRemotePlayback loop playsinline muted autoplay="">
			<source src="<?php echo get_template_directory_uri(); ?>/img/0_Most_used_elements/footer-video.mp4" type="video/mp4">
		</video>
	</div>
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="global_title">
					<h2 class="line1">Contact</h2>
					<h2 class="line2">Us</h2>
				</div>
				<div class="form_wrapp">
					<?php echo do_shortcode('[advanced_form form="form_664dc6262717d"]'); ?>
				</div>
			</div>
		</div>
	</div>

	<div class="scroll_text_wrap">
		<div class="scroll_text">
			<h2 class="marquee">DRUCKGUSS RECYCLING ALLOYING</h2>
		</div>
	</div>



	<script type="text/javascript">
		$(function() {
			var speed_text;
			if ($(window).width() < 991) {
				speed_text = 1000;
			} else {
				speed_text = 300;
			}
			console.log(speed_text)
			$('.marquee').marquee({
				gap: 50,
				duplicated: true,
				speed: speed_text,

			});
		});
	</script>


</div>


</div>


<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.easing.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/owlcarousel/owl.carousel.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/custom.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.marquee.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/wow.js"></script>
<?php wp_footer() ?>

<script>
	$(window).on('load', function() {
		wow = new WOW({
			boxClass: 'wow',
			animateClass: 'animated',
			offset: 5,
			mobile: true,
			live: true
		})
		wow.init();
	});
</script>
</body>

</html>