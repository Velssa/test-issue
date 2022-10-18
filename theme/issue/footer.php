<footer class="footer">
	<div class="footer__container">
		<div class="footer__top">
			<div class="footer__info">
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
				<div class="footer__text">
					<p><? the_field('footer_text', 'option'); ?></p>
				</div>
			</div>
			<div class="footer__counter">
				<div class="counter">
					<div class="counter__title">
						Visitor Counter
					</div>
					<div class="counter__counter"></div>
					<div class="counter__list">
						<div class="counter__item">
							<img src="<? echo get_template_directory_uri(); ?>/img/icons/user-male.svg" alt="">
							Visit Today: 1
						</div>
						<div class="counter__item">
							<img src="<? echo get_template_directory_uri(); ?>/img/icons/user-group.svg" alt="">
							Total Visit: 1
						</div>
						<div class="counter__item">
							<img src="<? echo get_template_directory_uri(); ?>/img/icons/checked-user-male.svg" alt="">
							Hits Today: 1
						</div>
						<div class="counter__item">
							<img src="<? echo get_template_directory_uri(); ?>/img/icons/conference.svg" alt="">
							Total Hits: 1
						</div>
						<div class="counter__item">
							<img src="<? echo get_template_directory_uri(); ?>/img/icons/read-online.svg" alt="">
							Who’s Online: 1
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="footer__bottom">
			<div class="footer__links">
				<? $footer_link_terms = get_field('footer_link_terms', 'option'); ?>
				<? $footer_link_policy = get_field('footer_link_policy', 'option'); ?>
				<? if ($footer_link_terms) : ?>
					<a href="<? echo esc_url($footer_link_terms['url']); ?>" target="<? echo esc_attr($footer_link_terms['target']); ?>"><? echo esc_html($footer_link_terms['title']); ?></a>
					|
				<? endif; ?>
				<? if ($footer_link_policy) : ?>
					<a href="<? echo esc_url($footer_link_policy['url']); ?>" target="<? echo esc_attr($footer_link_policy['target']); ?>"><? echo esc_html($footer_link_policy['title']); ?></a>
				<? endif; ?>
			</div>
			<div class="footer__copyright"><? the_field( 'footer_copyright', 'option' ); ?></div>
		</div>
	</div>
</footer>
<div id="video" aria-hidden="true" class="popup">
	<div class="popup__wrapper">
		<div class="popup__content">
			<button data-close type="button" class="popup__close">
				<svg viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
					<circle cx="20" cy="20" r="19.5" stroke="#2C334D" stroke-opacity="0.2" />
					<path d="M27 13L20 20M13 27L20 20M20 20L27 27L13 13" stroke="#2C334D" stroke-opacity="0.2" />
				</svg>
			</button>
			<div class="popup__video" data-popup-youtube-place>
			</div>
		</div>
	</div>
</div>
</div>
<? wp_footer(); ?>
<script>
	jQuery(document).ready(function($) {
		$(".scroll-btn").on('click', function(e) {
			e.preventDefault();
			$('html, body').animate({
				scrollTop: $($(this).attr('href')).offset().top
			}, 500, 'linear');
			return false;
		});
		$(".input-phone").inputmask("(99) 9999[9]-9999");
	});
</script>
</body>

</html>