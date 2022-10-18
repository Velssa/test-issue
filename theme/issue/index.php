<?php get_header(); ?>
<main class="page">
	<div class="page__container">
		<?php
		if (function_exists('yoast_breadcrumb')) {
			yoast_breadcrumb('<div id="breadcrumbs" class="breadcrumbs">', '</div>');
		}
		?>
		<?php if (have_posts()) : ?>
			<h2 class="page-title"><? single_post_title(); ?></h2>
			<div class="page-content">
				<?php
				/* Start the Loop */
				while (have_posts()) :
					the_post(); ?>
					<div class="blog-page-item">
						<div class="testmonial">
							<a href="<? the_permalink(); ?>" class="blog-post-name"><? the_title(); ?></a>
							<div class="testmonial__text">
								<? the_excerpt(); ?>
							</div>
							<a href="<? the_permalink(); ?>" class="btn-green">Read More</a>
						</div>
					</div>
				<? endwhile; ?>
				<div class="pagination">
					<?
					$posts_pagination = [
						'prev_text' => '«',
						'next_text' => '»'
					]
					?>
					<? echo get_the_posts_pagination($posts_pagination);
					?>
				</div>
			<? else :
		//get_template_part('template-parts/content', 'none');

		endif;
			?>
			</div>
	</div>
</main>
<?php get_footer();
