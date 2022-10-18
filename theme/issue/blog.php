<?
/*
Template Name: Testimonials
Template Post Type: page
*/

get_header(); ?>

<main class="page">
    <div class="page__container">
        <?php
        if (function_exists('yoast_breadcrumb')) {
            yoast_breadcrumb('<div id="breadcrumbs" class="breadcrumbs">', '</div>');
        }
        ?>
        <?php if (have_posts()) : ?>
            <h1 class="page-title"><? the_title(); ?></h1>
            <?php
            /* Start the Loop */
            while (have_posts()) :
                the_post();

                get_template_part('template-parts/content', get_post_type());

            endwhile; ?>
            <div class="pagination">
                <?
                $posts_pagination = [
                    'prev_text' => '«',
                    'next_text' => '»'
                ]
                ?>
                <? get_the_posts_pagination($posts_pagination); ?>
            </div>
        <? else :
            get_template_part('template-parts/content', 'none');

        endif;
        ?>
    </div>
</main>
<? get_footer(); ?>