<?php get_header(); ?>

<main class="page">
	<div class="page__container">
		<?php
		if (function_exists('yoast_breadcrumb')) {
			yoast_breadcrumb('<div id="breadcrumbs" class="breadcrumbs">', '</div>');
		}
		?>
		<?php
		while (have_posts()) :
			the_post();
		?>
			<h1 class="page-title"><? the_title(); ?></h1>
			<div class="page-content">
				<? the_content(); ?>
			</div>
		<?
		endwhile;
		?>
	</div>
</main>

<?php get_footer();
