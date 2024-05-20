<?php
/*
Template Name: Page
*/
get_header(); ?>
<section class="standard-content">
	<div class="container">
		<div class="row">
			<div class="col-md-12 animsition-link">
				<?php
				while ( have_posts() ): the_post();
				the_content();
				get_template_part( 'content', 'page' );
				endwhile;
				?>
			</div>
		</div>
	</div>
</section>
<?php get_footer();?>