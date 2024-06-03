<div class="footer_section">

	<?php if (have_rows('content_1', 'options')) : ?>
		<?php while (have_rows('content_1', 'options')) : the_row();

			$scrolling_text = get_sub_field('scrolling_text');
			$background_video = get_sub_field('background_video');






		?>
			<?php if ($background_video) : ?>
				<div class="video-wrap">
					<video disableRemotePlayback loop playsinline muted autoplay="">
						<source src="<?php echo $background_video ?>" type="video/mp4">
					</video>
				</div>
			<?php endif; ?>


		<?php
		endwhile; ?>
	<?php endif; ?>
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="global_title">
					<h2 class="line1">Contact <span>Us</span></h2>
				</div>
				<div class="form_wrapp">
					<?php echo do_shortcode('[advanced_form form="form_664dc6262717d"]'); ?>
				</div>
			</div>
		</div>
	</div>
	<?php if (have_rows('content_1', 'options')) : ?>
		<?php while (have_rows('content_1', 'options')) : the_row();

			$scrolling_text = get_sub_field('scrolling_text');
			$background_video = get_sub_field('background_video');






		?>
			<div class="scroll_text_wrap">
				<div class="scroll_text">
					<?php if ($scrolling_text) : ?>
						<h2 class="marquee"><?php echo $scrolling_text ?></h2>
					<?php endif; ?>

				</div>
			</div>
		<?php
		endwhile; ?>
	<?php endif; ?>


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


	<?php if (have_rows('content_2', 'options')) : ?>
		<?php while (have_rows('content_2', 'options')) : the_row();

			$scrolling_text = get_sub_field('scrolling_text');
			$background_video = get_sub_field('background_video');






		?>

			<div id="kontakt" class="footer_main_part">

				<div class="rsignet">
					<img src="<?php echo get_template_directory_uri(); ?>/img/0_Most_used_elements/footer-r-signet2.png" alt="name">
				</div>
				<div class="container">
					<div class="row">

						<?php if (have_rows('info_box')) : ?>
							<?php while (have_rows('info_box')) : the_row();

								$title_1 = get_sub_field('title_1');
								$title_2 = get_sub_field('title_2');

								$title_3 = get_sub_field('title_3');
								$info = get_sub_field('info');






							?>


								<div class="col-lg-4 col-md-6">
									<div class="wrap">
										<?php if ($title_1) : ?>
											<div class="main_title wow fadeInUp" data-wow-delay="0.6s" data-wow-duration="0.6s">
												<h2><?php echo $title_1 ?></h2>
											</div>
										<?php endif; ?>


										<?php if ($title_2) : ?>
											<div class="subtitle wow fadeInUp" data-wow-delay="0.7s" data-wow-duration="0.6s">
												<h3><?php echo $title_2 ?></h3>
											</div>
										<?php endif; ?>


										<?php if ($title_3) : ?>
											<div class="title2 wow fadeInUp" data-wow-delay="0.8s" data-wow-duration="0.6s">
												<h2><?php echo $title_3 ?></h2>
											</div>
										<?php endif; ?>


										<?php if ($info) : ?>
											<div class="text wow fadeInUp" data-wow-delay="0.9s" data-wow-duration="0.6s">
												<?php echo $info ?>
											</div>
										<?php endif; ?>


									</div>
								</div>
							<?php
							endwhile; ?>
						<?php endif; ?>


						<div class="col-lg-12">
							<div class="links_wrap">
								<div class="line">
									<div class="iner_red"></div>
								</div>

								<div class="links">
									<div class="first">
										<?php
										$link = get_sub_field('linkedin');
										if ($link) :
											$link_url = $link['url'];
											$link_title = $link['title'];
											$link_target = $link['target'] ? $link['target'] : '_self';
										?>



											<a href="<?php echo esc_url($link_url); ?>" target="<?php echo esc_attr($link_target); ?>"><?php echo esc_html($link_title); ?></a>
										<?php endif; ?>


										<?php
										$link = get_sub_field('facebook');
										if ($link) :
											$link_url = $link['url'];
											$link_title = $link['title'];
											$link_target = $link['target'] ? $link['target'] : '_self';
										?>



											<a href="<?php echo esc_url($link_url); ?>" target="<?php echo esc_attr($link_target); ?>"><?php echo esc_html($link_title); ?></a>
										<?php endif; ?>


										<?php
										$link = get_sub_field('youtube');
										if ($link) :
											$link_url = $link['url'];
											$link_title = $link['title'];
											$link_target = $link['target'] ? $link['target'] : '_self';
										?>



											<a href="<?php echo esc_url($link_url); ?>" target="<?php echo esc_attr($link_target); ?>"><?php echo esc_html($link_title); ?></a>
										<?php endif; ?>


									</div>

									<div class="second">
										<?php
										$link = get_sub_field('impressum');
										if ($link) :
											$link_url = $link['url'];
											$link_title = $link['title'];
											$link_target = $link['target'] ? $link['target'] : '_self';
										?>



											<a href="<?php echo esc_url($link_url); ?>" target="<?php echo esc_attr($link_target); ?>"><?php echo esc_html($link_title); ?></a>
										<?php endif; ?>

									</div>
								</div>
							</div>
						</div>



					</div>
				</div>
			</div>


			<div class="footer_bottom">
				<div class="first">
					<p>
						<a href="#">created by ADAM Communication</a>
					</p>
				</div>
			</div>

		<?php
		endwhile; ?>
	<?php endif; ?>

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