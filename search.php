<?php
/*
Template Name: Search Page
*/
?>
<?php get_header(); ?>
<section class="standard-page search">
	<div class="container">
		<div class="title line">
			<h1>Suche</h1>
		</div>
		<div class="item-wrap search-list">
			<?php $search = $_GET['s']; ?>
			<?php if ( have_posts() ) { ?>
			<ul>
				<?php while ( have_posts() ) { the_post(); ?>
				<li>
					<a href="<?php echo get_permalink(); ?>"><?php the_title();  ?></a>
				</li>
				<?php } ?>
			</ul>
			<div class="paginate-search"><?php echo paginate_links(); ?></div>
			<?php } else { ?>
			<h3>Ihre Suche nach „<?php echo $search;  ?>“ ergab 0 Treffer</h3>
			<?php } ?>
		</div>
	</div>
</section>
<?php get_footer(); ?>