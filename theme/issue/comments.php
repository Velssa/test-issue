<?php
if (post_password_required()) {
	return;
}
?>

<div class="testimonials">
	<div class="testimonials__list">
		<?php
		if (have_comments()) :
		?>

			<?php
			wp_list_comments(
				array(
					'callback' => 'mytheme_comment',
				)
			);
			?>

		<? endif; ?>
	</div>

	<div class="pagination">
		<?
		$comments_pagination = [
			'prev_text' => '«',
			'next_text' => '»'
		]
		?>
		<?php echo get_the_comments_pagination($comments_pagination); ?>
	</div>
	<div class="testimonials__container">
		<div class="add-testimonials">
			<div class="add-testimonials__title">Add your testimonial</div>
			<div class="add-testimonials__form">
				<? $comments_form = [
					'fields'               => [
						'author' => '<div class="form-row">
                    <label for="author"></label>
                    <input id="author" name="author" type="text" placeholder="Your Name" value="' . esc_attr($commenter['comment_author']) . '" size="30"' . $aria_req . $html_req . ' />
                    </div>',
						'email'  => '<div class="form-row">
                    <label for="email"></label>
                    <input id="email" name="email" placeholder="Email" ' . ($html5 ? 'type="email"' : 'type="text"') . ' value="' . esc_attr($commenter['comment_author_email']) . '" size="30" aria-describedby="email-notes"' . $aria_req . $html_req  . ' />
                    </div>',
						'url'    => '<div class="form-row">
                    <label for="url"></label>
                    <input id="url" name="url" placeholder="Website" ' . ($html5 ? 'type="url"' : 'type="text"') . ' value="' . esc_attr($commenter['comment_author_url']) . '" size="30" />
                    </div>',
						'cookies' => '<div class="cookies-row">' .
							sprintf('<input id="wp-comment-cookies-consent" name="wp-comment-cookies-consent" type="checkbox" value="yes"%s />', $consent) . '
                    <label for="wp-comment-cookies-consent">' . __('Save my name, email, and website in this browser for the next time I comment.') . '</label>
                    </div>',
					],
					'comment_field' => '<div class="form-row">
                        <label for="comment"></label>
                        <textarea id="comment" name="comment" aria-required="true" required="required" placeholder="Your testimonial"></textarea>
                        </div>',
					'must_log_in'   => '<div class="form-row">' .
						sprintf(__('You must be <a href="%s">logged in</a> to post a comment.'), wp_login_url(apply_filters('the_permalink', get_permalink($post_id)))) . '
                         </div>',
					'logged_in_as'  => '<div class="form-row">' .
						sprintf(__('<a href="%1$s" aria-label="Logged in as %2$s. Edit your profile.">Logged in as %2$s</a>. <a href="%3$s">Log out?</a>'), get_edit_user_link(), $user_identity, wp_logout_url(apply_filters('the_permalink', get_permalink($post_id)))) . '
                         </div>',
					'comment_notes_before' => '<div class="form-row">
                                <span id="email-notes">' . __('Your email address will not be published.') . '</span>' .
						($req ? $required_text : '') . '
                                </div>',
					'comment_notes_after'  => '',
					'id_form'              => 'commentform',
					'id_submit'            => 'submit',
					'class_container'      => 'comment-respond',
					'class_form'           => 'comment-form',
					'class_submit'         => 'submit',
					'name_submit'          => 'Send',
					'title_reply'          => '',
					'title_reply_to'       => '',
					'title_reply_before'   => '',
					'title_reply_after'    => '',
					'submit_button'        => '<input name="%1$s" type="submit" id="%2$s" class="%3$s" value="%4$s" />',
					'submit_field'         => '<div class="form-row">%1$s %2$s</div>',
				];

				comment_form($comments_form);
				?>
			</div>
		</div>
	</div>
</div>