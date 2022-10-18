<!doctype html>
<html <? language_attributes(); ?>>

<head>
    <meta charset="<? bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">

    <? wp_head(); ?>
</head>

<body>
    <div class="wrapper">
        <header class="header">
            <div class="header__container">
                <div class="header__row">
                    <div class="header__logo">
                        <a href="/" class="logo-block">
                            <? $logo_icon = get_field('logo_icon', 'option'); ?>
                            <? if ($logo_icon) : ?>
                                <div class="logo-block__img">
                                    <img src="<? echo esc_url($logo_icon['url']); ?>" alt="<? echo esc_attr($logo_icon['alt']); ?>" />
                                </div>
                                <div class="logo-block__content">
                                    <div class="logo-block__title"><? the_field('logo_title', 'option'); ?></div>
                                    <div class="logo-block__subtitle"><? the_field('logo_text', 'option'); ?></div>
                                </div>
                            <? endif; ?>
                        </a>
                    </div>
                    <div class="header__right">
                        <div class="header__menu">
                            <div class="header__menu menu">
                                <button type="button" class="menu__icon icon-menu"><span></span></button>
                                <? wp_nav_menu([
                                    'theme_location'  => 'top-menu',
                                    'container'       => 'nav',
                                    'container_class' => 'menu__body',
                                    'menu_class'      => 'menu__list',
                                    'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                                ]); ?>
                            </div>
                        </div>
                        <? $hedaer_button = get_field('hedaer_button', 'option'); ?>
                        <? if ($hedaer_button) : ?>
                            <div class="header__button">
                                <a href="<? echo esc_url($hedaer_button['url']); ?>" class="btn-light" target="<? echo esc_attr($hedaer_button['target']); ?>"><? echo esc_html($hedaer_button['title']); ?></a>
                            </div>
                        <? endif; ?>
                    </div>
                </div>
            </div>
        </header>