<? get_header(); ?>
<main class="home">
    <? $top_bg = get_field('block1_bg_image'); ?>
    <section class="home-top" <? if ($top_bg) : ?>style="backgroung-image:url(<? echo esc_url($top_bg['url']); ?>)" <? endif; ?>>
        <div class="home-top__container">
            <div class="home-top__row">
                <div class="home-top__content">
                    <div class="home-top__pretitle"><? the_field('block1_pretitle'); ?></div>
                    <h1 class="home-top__title"><? the_field('block1_title'); ?></h1>
                    <div class="home-top__text">
                        <? the_field('block1_text'); ?>
                    </div>
                    <div class="home-top__buttons">
                        <? if (have_rows('block1_video_tour')) : ?>
                            <? while (have_rows('block1_video_tour')) : the_row(); ?>
                                <? if (get_sub_field('block1_video_buttonlink') == 1) : ?>
                                    <a href="#" data-popup="#video" data-popup-youtube="<? the_sub_field('block1_video_code_from_youtube'); ?>" class="home-top__play-btn">
                                        <svg viewBox="0 0 40 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M38.9427 4.00767C38.4853 2.431 37.137 1.188 35.4267 0.766334C32.3243 3.82463e-07 19.887 0 19.887 0C19.887 0 7.44967 3.82463e-07 4.3473 0.766334C2.63702 1.188 1.28868 2.431 0.831277 4.00767C-5.92679e-08 6.86767 0 14.6667 0 14.6667C0 14.6667 -5.92679e-08 22.4657 0.831277 25.3257C1.28868 26.9023 2.63702 28.1453 4.3473 28.567C7.44967 29.3333 19.887 29.3333 19.887 29.3333C19.887 29.3333 32.3243 29.3333 35.4267 28.567C37.139 28.1453 38.4853 26.9023 38.9427 25.3257C39.774 22.4657 39.774 14.6667 39.774 14.6667C39.774 14.6667 39.774 6.86767 38.9427 4.00767ZM15.9096 21.0173V8.316L27.8418 14.6667L15.9096 21.0173Z" />
                                        </svg>
                                        <? the_sub_field('block1_text_button'); ?></a>
                                <? else : ?>
                                    <a href="<? the_sub_field('block1_youtube_link'); ?>" class="home-top__play-btn" target="_blank">
                                        <svg viewBox="0 0 40 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M38.9427 4.00767C38.4853 2.431 37.137 1.188 35.4267 0.766334C32.3243 3.82463e-07 19.887 0 19.887 0C19.887 0 7.44967 3.82463e-07 4.3473 0.766334C2.63702 1.188 1.28868 2.431 0.831277 4.00767C-5.92679e-08 6.86767 0 14.6667 0 14.6667C0 14.6667 -5.92679e-08 22.4657 0.831277 25.3257C1.28868 26.9023 2.63702 28.1453 4.3473 28.567C7.44967 29.3333 19.887 29.3333 19.887 29.3333C19.887 29.3333 32.3243 29.3333 35.4267 28.567C37.139 28.1453 38.4853 26.9023 38.9427 25.3257C39.774 22.4657 39.774 14.6667 39.774 14.6667C39.774 14.6667 39.774 6.86767 38.9427 4.00767ZM15.9096 21.0173V8.316L27.8418 14.6667L15.9096 21.0173Z" />
                                        </svg>
                                        <? the_sub_field('block1_text_button'); ?></a>
                                <? endif; ?>
                            <? endwhile; ?>
                        <? endif; ?>
                        <? if (have_rows('block1_try_button')) : ?>
                            <? while (have_rows('block1_try_button')) : the_row(); ?>
                                <? if (get_sub_field('block1_try_scroll_or_link') == 1) : ?>
                                    <a href="#<? the_sub_field('block1_scroll_from_block_id'); ?>" class="home-top__form-btn btn-green scroll-btn"><? the_sub_field('block1_try_text_button'); ?></a>
                                <? else : ?>
                                    <? $block1_try_link = get_sub_field('block1_try_link'); ?>
                                    <? if ($block1_try_link) : ?>
                                        <a href="<? echo esc_url($block1_try_link['url']); ?>" class="home-top__form-btn btn-green" target="<? echo esc_attr($block1_try_link['target']); ?>"><? echo esc_html($block1_try_link['title']); ?></a>
                                    <? endif; ?>
                                <? endif; ?>
                            <? endwhile; ?>
                        <? endif; ?>
                    </div>
                </div>
                <div class="home-top__img">
                    <? $block1_image = get_field('block1_image'); ?>
                    <? if ($block1_image) : ?>
                        <img src="<? echo esc_url($block1_image['url']); ?>" alt="<? echo esc_attr($block1_image['alt']); ?>" />
                    <? else : ?>
                        <img src="<? get_template_directory_uri(); ?>/img/content/top-img.svg" alt="">
                    <? endif; ?>
                </div>
            </div>
        </div>
    </section>
    <section class="home-info">
        <div class="home-info__container">
            <div class="home-info__row">
                <div class="home-info__img">
                    <? $block2_image = get_field('block2_image'); ?>
                    <? if ($block2_image) : ?>
                        <img src="<? echo esc_url($block2_image['url']); ?>" alt="<? echo esc_attr($block2_image['alt']); ?>" />
                    <? else : ?>
                        <img src="<? echo get_template_directory_uri(); ?>/img/content/info-img.svg" alt="">
                    <? endif; ?>
                </div>
                <div class="home-info__content">
                    <div class="home-info__pretitle"><? the_field('block2_pretitle'); ?></div>
                    <h2 class="home-info__title"><? the_field('block2_title'); ?></h2>
                    <div class="home-info__text">
                        <? the_field('block2_text'); ?>
                    </div>
                    <? if (have_rows('block2_start_button')) : ?>
                        <? while (have_rows('block2_start_button')) : the_row(); ?>
                            <? if (get_sub_field('block2_start_scroll_or_link') == 1) : ?>
                                <a href="#<? the_sub_field('block1_scroll_from_block_id'); ?>" class="home-top__form-btn btn-green scroll-btn"><? the_sub_field('block2_start_text_button'); ?></a>
                            <? else : ?>
                                <? $block2_start_link = get_sub_field('block2_start_link'); ?>
                                <? if ($block2_start_link) : ?>
                                    <a href="<? echo esc_url($block2_start_link['url']); ?>" class="home-top__form-btn btn-green" target="<? echo esc_attr($block2_start_link['target']); ?>"><? echo esc_html($block2_start_link['title']); ?></a>
                                <? endif; ?>
                            <? endif; ?>
                        <? endwhile; ?>
                    <? endif; ?>
                </div>
            </div>
        </div>
    </section>
    <section class="home-contacts">
        <div class="home-contacts__container">
            <h2 class="home-contacts__title"><? the_field('contacts_title'); ?></h2>
            <div class="home-contacts__text">
                <? the_field('contacts_text'); ?>
            </div>
            <div class="home-contacts__row">
                <div class="home-contacts__map">
                    <? $short_map = get_field('contacts_map'); ?>
                    <? echo do_shortcode($short_map); ?>
                </div>
                <div id="form" class="home-contacts__form">
                    <div class="contacts-form">
                        <div class="contacts-form__title"><? the_field('contacts_form_title'); ?></div>
                        <? $short_form = get_field('contacts_form_shortcode'); ?>
                        <? echo do_shortcode($short_form); ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
<? get_footer(); ?>